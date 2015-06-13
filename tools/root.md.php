
<?php

$modules = array(
              array("Comments", "comments", "../comments.md"),
              array("Data Types", "data_types", "../data_types.md"),
              array("Input / Output", "io", "../io.md"),
              array("Variables", "variables", "../variables.md"),
              array("if Statements", "if_statements", "../if_statements.md"),
              array("for Loops", "for_loops", "../for_loops.md"),
              array("Functions", "functions", "../functions.md"),
                );

$foo = array( 1, 2, 3);

function create_toc()
{
    global $modules;
    for ($i =0; $i < count($modules); $i++)
    {
        list($descr, $anchor, $filename) = $modules[$i];
        echo "* [$descr]($anchor)\n";
    }
}

function load_modules()
{
    global $modules;
    for ($i =0; $i < count($modules); $i++)
    {
        list($descr, $anchor, $filename) = $modules[$i];
        echo "<a name=\"$anchor\"/>";
        require($filename);
        echo "\n -------------------------------- \n ";
    }
}

?>



<?php require("../intro.md") ?>

<?php create_toc(); ?>

<?php echo $foo; load_modules(); ?>

