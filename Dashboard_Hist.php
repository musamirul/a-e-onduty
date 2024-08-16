<?php include("Interface/header.php"); ?>
<?php
// Number of items per page
$itemsPerPage = 10;

// Current page number (default to 1 if not set)
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the OFFSET for the SQL query
$offset = ($currentPage - 1) * $itemsPerPage;

// Query to retrieve data
$sql = "SELECT * FROM edash LIMIT $offset, $itemsPerPage";
$result = $con->query($sql);

// Query to count total items
if($countSql = mysqli_query($con,"SELECT * FROM edash")){
    echo $totalCount = mysqli_num_rows($countSql);
}

echo $totalCount;
// Calculate the total number of pages
$totalPages = ceil($totalCount / $itemsPerPage);

// Close the database connection
$con->close();
?>

    <div class="container mt-5">
        <h2>Product List</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <!-- Add other table headers as needed -->
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['Aedash_Anaesthetic']; ?></td>
                        <td><?php echo $row['Aedash_Anaesthetic']; ?></td>
                        <!-- Add other table data columns as needed -->
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <!-- Pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <li class="page-item <?php echo ($i == $currentPage) ? 'active' : ''; ?>">
                        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>

<?php include("Interface/footer.php"); ?>