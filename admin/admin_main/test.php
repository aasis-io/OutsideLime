<!DOCTYPE html>
<html>

<head>
    <title>Dynamic Tree View</title>
    <style>
        ul {
            list-style-type: none;
            margin-left: 20px;
        }

        ul ul {
            margin-left: 20px;
        }

        .form-container {
            margin-top: 20px;
        }

        select {
            width: 600px;
        }

        select>option {
            font-size: 16px;
            height: 24px;
        }
    </style>
</head>

<body>


    <nav class="navbar">
        <ul>
            <!-- Your existing navbar items -->
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
           
                <?php


                $conn = mysqli_connect('localhost', 'root', '', 'outsidelime');
                if (!$conn) {
                    die('Database connection error');
                }

                // Function to recursively build the tree dropdown
                function buildTreeDropdown($parent_id = 0, $conn)
                {
                    $sql = "SELECT * FROM category WHERE parent_id = $parent_id";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        echo "<ul>";
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<li><a href='#'>" . $row['name'] . "</a>";
                            buildTreeDropdown($row['id'], $conn);
                            echo "</li>";
                        }
                        echo "</ul>";
                    }
                }

                // Display the tree dropdown
                buildTreeDropdown(0, $conn);

                mysqli_close($conn);
                ?>
       
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>



    <div class="form-container">
        <h3>Add New Node</h3>
        <form action="processCategory.php" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="parent">Parent:</label>
            <select name="parent">
                <option value="0">Root</option>
                <?php
                // Fetch existing nodes for dropdown
                $sql = "SELECT * FROM category";
                $result = mysqli_query($conn, $sql);

                $nodes = [];
                while ($row = mysqli_fetch_assoc($result)) {
                    $nodes[$row['id']] = $row;
                }

                // Recursive function to display nodes
                function displayNodes($parentId, $nodes, $displayedNodes = [], $depth = 0)
                {
                    $indent = str_repeat('----', $depth);

                    if ($parentId != 0 && !in_array($parentId, $displayedNodes)) {
                        echo "<option value='" . $parentId . "'>" . $indent . $nodes[$parentId]['name'] . "</option>";
                        $displayedNodes[] = $parentId;
                    }

                    foreach ($nodes as $node) {
                        if ($node['parent_id'] == $parentId && !in_array($node['id'], $displayedNodes)) {
                            echo "<option value='" . $node['id'] . "'>" . $indent . $node['name'] . "</option>";
                            $displayedNodes[] = $node['id'];
                            displayNodes($node['id'], $nodes, $displayedNodes, $depth + 1);
                        }
                    }
                }

                // Display the nodes
                displayNodes(0, $nodes);
                ?>
            </select>

            <button type="submit">Submit</button>
        </form>
    </div>




</body>

</html>