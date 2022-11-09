<?php

$db_name = htmlspecialchars($_GET["db"]);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
th {
    background-color: #eee;
}
td, th {
    border:1px solid #ddd;
    padding: 5px;
}
#tables {
    margin: 5px;
    padding: 0;
}
#tables li {
    font-size: 12px;
    height: 15px;
    list-style: none;
}
#tables li a {
    text-decoration: none;
}
.db_table.selected {
    text-decoration: underline;
}
.db_table.selected a {
    color: #000;
}
#statistics pre {
    margin-bottom: 0;
}
</style>
<div class="row">
    <div class="col-md-2">
        <ul id="tables">
            <?php
            $table_name = (isset($_GET["table"])) ? $_GET["table"] : "";
            $search_fields = (isset($_GET["search_field"])) ? $_GET["search_field"] : array();
            $search_types = (isset($_GET["search_type"])) ? $_GET["search_type"] : array();
            $search_values = (isset($_GET["search_value"])) ? $_GET["search_value"] : array();

            $db = DB::connection($db_name);
            $tables = $db->select("SELECT * FROM INFORMATION_SCHEMA.TABLES");
            $ordered_tables = array();
            foreach ($tables as $key => $table) {
                $ordered_tables[$table->TABLE_NAME] = $table->TABLE_NAME;
            }
        
            ksort($ordered_tables);
        
            $i = 0;
            foreach ($ordered_tables as $table) {
                $i++;
                $continue = false;
                switch($db_name) {
                    case "limesurvey":
                        if (strpos($table, "lime_") === false || strpos($table, "lime_old_") !== false) {
                            $continue = true;
                        }
                        break;

                    case "liveuser_general":
                        if (strpos($table, "liveuser_") === false) {
                            $continue = true;
                        }
                        break;
                }

                if ($continue) {
                    continue;
                }
                ?>
                <li class="db_table<?=($table == $table_name) ? " selected" : ""; ?>"><a href="/admin?db=<?=$db_name; ?>&table=<?=$table; ?>"><pre><?=$table; ?></pre></a></li>
                <?php
            }
            ?>
        </ul>
    </div>
    <div class="col-md-10">
        <?php        
        if ($table_name) {
            $sql = "
                SELECT
                    *
                FROM
                    " . htmlspecialchars($table_name) . "
            ";

            $where = array();

            if ($search_fields) { 
                foreach($search_fields as $key => $search_field) {
                    if (!$search_field) {
                        continue;
                    }

                    $tmp_sql = $search_field;

                    switch($search_types[$key]) {
                        case "LIKE %%":
                            $tmp_sql .= " LIKE '%" . $search_values[$key] . "%'";
                            break;
    
                        case ">":
                            $tmp_sql .= " > '" . $search_values[$key] . "'";
                            break;
    
                        case "<":
                            $tmp_sql .= " < '" . $search_values[$key] . "'";
                            break;
    
                        case "<>":
                            $tmp_sql .= " <> '" . $search_values[$key] . "'";
                            break;
    
                        default:
                            $tmp_sql .= "
                                = '" . $search_values[$key] . "'
                            ";
                            break;                        
                    }

                    $where[] = $tmp_sql;
                }
            }

            if ($where) {
                $sql .= " WHERE " . implode(" AND ", $where);
            }

            $sql .= "
                LIMIT 100
            ";

            $rows = $db->select($sql);
            ?>
            <h4><a href="/admin?db=<?=$db_name; ?>&table=<?=$table_name; ?>"><?=$table_name; ?></a></h4>
            <?php
            $fields = array();

            if (isset($rows[0])) {
                foreach ($rows[0] as $field => $value) {
                    $fields[] = $field;
                }
            }
            ?>
            <form action="/admin" type="GET">
                <input type="hidden" name="db" value="<?=$db_name; ?>">
                <input type="hidden" name="table" value="<?=$table_name; ?>">
                <?php
                $fieldsets = 1;

                for ($f = 0; $f <= $fieldsets; $f++) {
                    if (!isset($search_fields[$f])) {
                        $search_fields[$f] = "";
                        $search_types[$f] = "";
                        $search_values[$f] = "";
                    }
                    ?>
                    <fieldset class="and">
                        <select name="search_field[<?=$f ;?>]" id="search_field">
                            <option value="">Campo</option>
                            <?php
                            foreach($fields as $field) {
                                $selected = ($field == $search_fields[$f]);
                                ?>
                                <option value="<?=$field; ?>"<?=($selected) ? " selected" : ""; ?>><?=$field; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <select name="search_type[<?=$f ;?>]" id="search_type">
                            <option value="">Operatore</option>
                            <option value="="<?=($search_types[$f] == "=") ? " selected" : ""; ?>>=</option>
                            <option value="LIKE %%"<?=($search_types[$f] == "LIKE %%") ? " selected" : ""; ?>>LIKE %...%</option>
                            <option value=">"<?=($search_types[$f] == ">") ? " selected" : ""; ?>>&gt;</option>
                            <option value="<"<?=($search_types[$f] == "<") ? " selected" : ""; ?>>&lt;</option>
                            <option value="<>"<?=($search_types[$f] == "<>") ? " selected" : ""; ?>>&lt;&gt;</option>
                        </select>
                        <input type="text" name="search_value[<?=$f ;?>]" placeholder="Valore" value="<?=$search_values[$f]; ?>">
                    </fieldset>
                    <?php
                }
                ?>
                <button type="submit">Cerca</button>
            </form>
            <span id="statistics"><pre>Total founds: <?=count($rows); ?></pre></span>
            <pre>
                <table>
                    <thead>
                        <tr>
                            <?php
                            foreach ($fields as $field) {
                                ?>
                                <th><?=$field; ?></th>
                                <?php
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($rows as $row) {
                            ?>
                            <tr>
                                <?php
                                foreach($fields as $field) {
                                    ?>
                                    <td><?=$row->$field; ?></td>
                                    <?php
                                }
                                ?>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </pre>
            <?php
        }
        ?>
    </div>
</div>