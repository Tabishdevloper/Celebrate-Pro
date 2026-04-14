<?php
    include_once("header.php");
    include_once("Database/connect.php");
    @session_start();

    if (isset($_POST['submit'])) {
        
        // Collect form data and sanitize inputs
        $name = trim($_POST['nm']);
        $surnm = trim($_POST['surnm']);
        $unm = trim($_POST['unm']);
        $email = trim($_POST['email']);
        $pswd = trim($_POST['pswd']); // Store password as plain text (not recommended for production)
        $mo = trim($_POST['mo']);
        $adrs = trim($_POST['adrs']);
        
        // Check if username already exists
        $stmt = $con->prepare("SELECT unm FROM registration WHERE unm = ?");
        $stmt->bind_param("s", $unm);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            echo "<script>alert('Username already exists');</script>";
        } else {
            
            // Insert new user data
            $stmt = $con->prepare("INSERT INTO registration (nm, surnm, unm, email, pswd, mo, adrs) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssss", $name, $surnm, $unm, $email, $pswd, $mo, $adrs);
            
            if ($stmt->execute()) {
                
                // Insert into login table
                $stmt = $con->prepare("INSERT INTO login (unm, pswd) VALUES (?, ?)");
                $stmt->bind_param("ss", $unm, $pswd);
                
                if ($stmt->execute()) {
                    echo "<script>alert('Registration successful! Please log in.');</script>";
                    echo "<script>window.location.assign('login.php')</script>";
                } else {
                    echo "<script>alert('Login creation failed: " . $stmt->error . "');</script>";
                }
            } else {
                echo "<script>alert('Registration failed: " . $stmt->error . "');</script>";
            }
        }
        $stmt->close();
        $con->close();
    }
?>

<div class="banner about-bnr">
    <div class="container"></div>
</div>
<div class="codes">
    <div class="container">
        <h2 class="w3ls-hdg" align="center">Registration Form</h2>
        <div class="grid_3 grid_4">
            <div class="tab-content">
                <div class="tab-pane active" id="horizontal-form">
                    <form class="form-horizontal" action="" method="post" name="reg">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="nm" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Surname</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="surnm" placeholder="Surname" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="unm" placeholder="Username" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control1" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control1" name="pswd" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Mobile No</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1" name="mo" pattern="[7-9][0-9]{9}" placeholder="Mobile No" maxlength="10" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Address</label>
                            <div class="col-sm-8">
                                <textarea name="adrs" class="form-control1" placeholder="Address" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="contact-w3form" align="center">
                            <input type="submit" name="submit" value="SEND">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include_once("footer.php");
?>

<!-- Let me know if you want me to make any more adjustments! 🚀 -->
