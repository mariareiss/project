<div class="row">
    <div class="col">
        <h1>Profiles</h1>
    </div>
    <div class="col-auto">
        <?php include "view-profile-newform.php"; ?>
    </div>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while ($profiles = $profile->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $profiles['user_id']; ?></td>
                    <td><?php echo $profiles['user_name']; ?></td>
                    <td><?php echo $profiles['user_email']; ?></td>
                    <td><?php echo $profiles['user_password']; ?></td>
                    <td>
                        <form method="post" action="">
                            <input type="hidden" name="uid" value="<?php echo $profiles['user_id']; ?>">
                            <input type="hidden" name="actionType" value="Delete">
                            <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <!-- Your SVG content here -->
                                </svg>
                            </button>
                        </form>
                    </td>
                    <td>
                        <?php include "view-profile-editform.php"; ?>
                    </td>
                    <td>
                        <!-- Form related to trips, include necessary input fields or buttons -->
                        <form method="post" action="trips.php">
                            <input type="hidden" name="uid" value="<?php echo $profiles['user_id']; ?>">
                            <!-- Include necessary input fields or buttons -->
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

