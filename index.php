<?php
include('include/header.php');
?>
<!-- form area start  -->
<div class="form-container" style="display: flex; flex-direction: column; align-items: center;">

    <!-- Centered Title -->
    <h1 style="font-size: 40px; text-align: center;">Teacher Details Form</h1>

    <form class="teacher-form" id="teacherForm" action="controller/controller.php" method="post" enctype="multipart/form-data" style="display: flex; gap: 20px; flex-wrap: wrap; width: 100%; max-width: 1200px; justify-content: center;  padding: 20px; border-radius: 8px;">
        <style>
            .teacher-form input[type="text"],
            .teacher-form input[type="date"],
            .teacher-form input[type="tel"],
            .teacher-form input[type="email"],
            .teacher-form input[type="number"],
            .teacher-form input[type="file"],
            .teacher-form select {
                width: 100%;
                height: 40px;
                padding: 8px;
                font-size: 16px;
                border: 1px solid black;
                border-radius: 4px;
                box-sizing: border-box;
            }

            .teacher-form button {
                height: 40px;
                font-size: 16px;
                padding: 8px 16px;
                border: 1px solid black;
                border-radius: 4px;
                cursor: pointer;
                background-color: #b71a00; /* Optional for button styling */
            }

            .teacher-form button:hover {
                background-color: #b71a34;
            }
        </style>
        <div style="flex: 1; min-width: 350px; margin-right: 40px;">
            <label for="name">Name:</label>
            <input type="text" id="name" name="faculty_name" required pattern="[A-Za-z\s]+">

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="faculty_dob" required>

            <label for="mobile">Mobile No:</label>
            <input type="tel" id="mobile" name="faculty_mobile" required pattern="^[1-9][0-9]{9}$">

            <label for="email">Email:</label>
            <input type="email" id="email" name="faculty_email" required>

            <label for="pan">PAN:</label>
            <input type="text" id="pan" name="faculty_pan" required>

            <label for="department">Department:</label>
            <select id="department" name="faculty_department" required>
                <option value="">Select Department</option>
                <option value="CS">Computer Science</option>
                <option value="DS">Data Science</option>
                <option value="IOT">Internet of Things</option>
                <option value="AI">Artificial Intelligence</option>
            </select>

            <label for="designation">Designation:</label>
            <select id="designation" name="faculty_designation" required>
                <option value="">Select Designation</option>
                <option value="Professor">Professor</option>
                <option value="Assistant Professor">Assistant Professor</option>
                <option value="Lecturer">Lecturer</option>
            </select>
        </div>
        <div style="flex: 1; min-width: 350px;">
            <label for="employeeId">Employee ID:</label>
            <input type="number" id="employeeId" name="faculty_employeeId" required>

            <label for="joiningDate">Joining Date:</label>
            <input type="date" id="joiningDate" name="faculty_joiningDate" required>

            <label for="promotionDate">Promotion Date:</label>
            <input type="date" id="promotionDate" name="faculty_promotionDate">

            <label for="joiningReport">Joining Report:</label>
            <input type="file" id="joiningReport" name="faculty_joiningReport" accept=".pdf,.jpg,.jpeg,.png">

            <label for="offerLetter">Offer Letter:</label>
            <input type="file" id="offerLetter" name="faculty_offerLetter" accept=".pdf,.jpg,.jpeg,.png">

            <label for="highestQualification">Highest Qualification Certificate:</label>
            <input type="file" id="highestQualification" name="faculty_highestQualification" accept=".pdf,.jpg,.jpeg,.png">

            <label for="universityName">University Name:</label>
            <input type="text" id="universityName" name="faculty_universityName" required pattern="[A-Za-z\s]+">
        </div>

        <!-- Centered Submit Button -->
        <div style="width: 100%; text-align: center; margin-top: 20px;">
            <button type="submit" id="submit" name="booking" style="color: white;">Submit</button>
        </div>
    </form>
</div>
<script>
    document.getElementById('teacherForm').onsubmit = function() {
        const dob = new Date(document.getElementById('dob').value);
        const joiningDate = new Date(document.getElementById('joiningDate').value);
        const promotionDate = new Date(document.getElementById('promotionDate').value);
        const currentYear = new Date().getFullYear();

        // Validate Date of Birth
        if (dob.getFullYear() > currentYear) {
            alert("Date of Birth must be in the past.");
            return false;
        }

        // Validate Joining Date
        if (joiningDate.getFullYear() < 2000 || joiningDate.getFullYear() > currentYear) {
            alert("Joining Date must be after the year 2000 and before the current year.");
            return false;
        }

        // Validate Promotion Date
        if (promotionDate.getFullYear() < 2000 || promotionDate.getFullYear() > currentYear || promotionDate <= joiningDate) {
            alert("Promotion Date must be after the year 2000, before the current year, and after the Joining Date.");
            return false;
        }

        alert("Form submitted successfully.");
        return true;
    };
</script>
    
    <!-- form area end -->
<br>

<?php
include('include/footer.php');
?>

