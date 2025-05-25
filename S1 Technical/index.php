<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>

<h2>Student Registration Form</h2>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Helper function to format names 
    function formatName($name) {
        return ucwords(strtolower(trim((string)$name)));
    }

    // Format and retrieve input values
    $lastName = isset($_POST['lastName']) ? formatName($_POST['lastName']) : '';
    $firstName = isset($_POST['firstName']) ? formatName($_POST['firstName']) : '';
    $middleName = isset($_POST['middleName']) ? formatName($_POST['middleName']) : '';

    $preferredLastName = isset($_POST['preferredLastName']) ? formatName($_POST['preferredLastName']) : '';
    $preferredFirstName = isset($_POST['preferredFirstName']) ? formatName($_POST['preferredFirstName']) : '';
    $preferredMiddleName = isset($_POST['preferredMiddleName']) ? formatName($_POST['preferredMiddleName']) : '';

    // General student registration details
    $studentNumber = isset($_POST['studentNumber']) ? $_POST['studentNumber'] : 'N/A';
    $date = isset($_POST['date']) ? $_POST['date'] : 'N/A';
    $entryDate = isset($_POST['entryDate']) ? $_POST['entryDate'] : 'N/A';
    $entryType = isset($_POST['entryType']) ? $_POST['entryType'] : 'N/A';
    $grade = isset($_POST['grade']) ? $_POST['grade'] : 'N/A';
    $oen = isset($_POST['oen']) ? $_POST['oen'] : 'N/A';
    $classHomeform = isset($_POST['classHomeform']) ? $_POST['classHomeform'] : 'N/A';
    $programType = isset($_POST['programType']) ? $_POST['programType'] : 'N/A';
    $isExpelled = isset($_POST['isExpelled']) ? $_POST['isExpelled'] : 'No';

    // Personal information
    $gender = isset($_POST['gender']) ? $_POST['gender'] : 'N/A';
    $dob = isset($_POST['dob']) ? $_POST['dob'] : 'N/A';
    $siblings = isset($_POST['siblings']) ? $_POST['siblings'] : 'N/A';

    // Checkbox input
    $birthProofs = isset($_POST['birthProofs']) ? implode(', ', $_POST['birthProofs']) : 'N/A';

    // Previous education details
    $prevSchoolBoard = isset($_POST['prevSchoolBoard']) ? $_POST['prevSchoolBoard'] : 'N/A';
    $lastDateAttended = isset($_POST['lastDateAttended']) ? $_POST['lastDateAttended'] : 'N/A';
    $prevSchool = isset($_POST['prevSchool']) ? $_POST['prevSchool'] : 'N/A';
    $prevGrade = isset($_POST['prevGrade']) ? $_POST['prevGrade'] : 'N/A';
    $languageInstruction = isset($_POST['languageInstruction']) ? $_POST['languageInstruction'] : 'N/A';
    $reasonTransfer = isset($_POST['reasonTransfer']) ? $_POST['reasonTransfer'] : 'N/A';
    $wrdsbPast = isset($_POST['wrdsbPast']) ? $_POST['wrdsbPast'] : 'No';
    $wrdsbSchools = isset($_POST['wrdsbSchools']) ? $_POST['wrdsbSchools'] : 'N/A';

    // Health-related info
    $medicalConditions = isset($_POST['medicalConditions']) ? $_POST['medicalConditions'] : 'N/A';
    $immunizationStatus = isset($_POST['immunizationStatus']) ? $_POST['immunizationStatus'] : 'N/A';
    $epiPenStatus = isset($_POST['epiPenStatus']) ? $_POST['epiPenStatus'] : 'N/A';

    // Citizenship info
    $birthCountry = isset($_POST['birthCountry']) ? $_POST['birthCountry'] : 'N/A';
    $provinceOfBirth = isset($_POST['provinceOfBirth']) ? $_POST['provinceOfBirth'] : 'N/A';
    $countryCitizenship = isset($_POST['countryCitizenship']) ? $_POST['countryCitizenship'] : 'N/A';
    $dateEnteredCanada = isset($_POST['dateEnteredCanada']) ? $_POST['dateEnteredCanada'] : 'N/A';

    // Citizenship status
    $statusCanadaArray = isset($_POST['statusCanada']) ? $_POST['statusCanada'] : [];
    $statusCanada = count($statusCanadaArray) > 0 ? implode(', ', $statusCanadaArray) : 'N/A';
    $statusOtherText = isset($_POST['statusOtherText']) ? $_POST['statusOtherText'] : 'N/A';
    $verificationOSR = isset($_POST['verificationOSR']) ? 'Yes' : 'No';

    // Output the submitted data 
    echo "<div class='output'><h3>Submitted Data:</h3>";

    // School-use section
    echo "<strong>For School Use - Permission to Register:</strong><br>";
    echo "Student Number: $studentNumber<br>";
    echo "Date: $date<br>";
    echo "Entry Date: $entryDate<br>";
    echo "Entry Type: $entryType<br>";
    echo "Grade: $grade<br>";
    echo "OEN: $oen<br>";
    echo "Class/Homeform: $classHomeform<br>";
    echo "Program Type: $programType<br>";
    echo "Currently Expelled: $isExpelled<br><hr>";

    // Student information
    echo "<strong>Student Information:</strong><br>";
    echo "Full Legal Name: $lastName, $firstName, $middleName<br>";
    echo "Preferred Name: $preferredLastName, $preferredFirstName, $preferredMiddleName<br>";
    echo "Gender: $gender<br>";
    echo "Date of Birth: $dob<br>";
    echo "Siblings: $siblings<br><hr>";

    // Proof of birth
    echo "<strong>For School Use - Proof of Birth:</strong><br>";
    echo "Proofs: $birthProofs<br><hr>";

    // Previous education
    echo "<strong>Previous School Information:</strong><br>";
    echo "Previous School Board / Municipality: $prevSchoolBoard<br>";
    echo "Last Date Attended: $lastDateAttended<br>";
    echo "Previous School: $prevSchool<br>";
    echo "Grade at Previous School: $prevGrade<br>";
    echo "Language of Instruction: $languageInstruction<br>";
    echo "Reason for Transfer: $reasonTransfer<br>";
    echo "Ever attended WRDSB before: $wrdsbPast<br>";
    echo "If yes, school(s): $wrdsbSchools<br><hr>";

    // Health information
    echo "<strong>Health Information:</strong><br>";
    echo "Medical Conditions: $medicalConditions<br>";
    echo "Immunization Record Provided: $immunizationStatus<br>";
    echo "Requires Epi-Pen: $epiPenStatus<br><hr>";

    // Citizenship
    echo "<strong>Citizenship Information:</strong><br>";
    echo "Birth Country: $birthCountry<br>";
    echo "Province of Birth: $provinceOfBirth<br>";
    echo "Country of Citizenship: $countryCitizenship<br>";
    echo "Date Entered Canada: $dateEnteredCanada<br>";
    echo "Status in Canada: $statusCanada<br>";
    echo "Other Status (specify): $statusOtherText<br>";
    echo "Verification in OSR: $verificationOSR<br>";
    echo "</div>";
}
?>


<form method="post">
<!-- For School Use Section -->
    <section>
        <h3>For School Use - Permission to Register:</h3>
        <div class="top-school-use-grid">
            <div class="form-group">
                <label for="studentNumber">Student Number:</label>
                <input type="text" id="studentNumber" name="studentNumber" required>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="entryDate">Entry Date:</label>
                <input type="date" id="entryDate" name="entryDate" required>
            </div>
            <div class="form-group">
                <label for="entryType">Entry Type:</label>
                <input type="text" id="entryType" name="entryType">
            </div>
            <div class="form-group">
                <label for="grade">Grade:</label>
                <input type="text" id="grade" name="grade">
            </div>
            <div class="form-group">
                <label for="oen">OEN:</label>
                <input type="text" id="oen" name="oen"> </div>
            <div class="form-group top-radio-group">
                <label class="inline-label" for="programTypeDSL">
                    <input type="radio" id="programTypeDSL" name="programType" value="DSL"> DSL
                </label>
                <label class="inline-label" for="programTypeSPED">
                    <input type="radio" id="programTypeSPED" name="programType" value="SPED"> SPED
                </label>
                <label class="inline-label" for="programTypePRC">
                    <input type="radio" id="programTypePRC" name="programType" value="PRC"> PRC
                </label>
                <label class="inline-label" for="programTypeISA">
                    <input type="radio" id="programTypeISA" name="programType" value="ISA"> ISA
                </label>
            </div>
            <div class="form-group">
                <label for="classHomeform">Class/Homeform:</label>
                <input type="text" id="classHomeform" name="classHomeform">
            </div>
        </div>

        <div class="form-group expelled-checkbox">
            <label>Is the student currently expelled from any school or school board?</label>
            <div class="radio-group">
                <label class="inline-label" for="isExpelledYes">
                    <input type="radio" id="isExpelledYes" name="isExpelled" value="Yes"> Yes
                </label>
                <label class="inline-label" for="isExpelledNo">
                    <input type="radio" id="isExpelledNo" name="isExpelled" value="No" checked> No
                </label>
            </div>
        </div>
    </section>
<!-- Student Information -->
    <section>
        <h3>Student Information</h3>
        <div class="form-group">
            <label>Full Legal Name:</label>
            <div class="name-group">
                <input type="text" name="lastName" placeholder="Last Name" required>
                <input type="text" name="firstName" placeholder="First Name" required>
                <input type="text" name="middleName" placeholder="Middle Name">
            </div>
        </div>

        <div class="form-group">
            <label>Preferred Name: (if different)</label>
            <div class="name-group">
                <input type="text" name="preferredLastName" placeholder="Preferred Last Name">
                <input type="text" name="preferredFirstName" placeholder="Preferred First Name">
                <input type="text" name="preferredMiddleName" placeholder="Preferred Middle Name">
            </div>
        </div>

        <div class="two-column">
            <div class="form-group radio-group">
                <label>Gender:</label>
                <label class="inline-label" for="genderMale">
                    <input type="radio" id="genderMale" name="gender" value="Male" required> Male
                </label>
                <label class="inline-label" for="genderFemale">
                    <input type="radio" id="genderFemale" name="gender" value="Female"> Female
                </label>
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
        </div>

        <div class="form-group">
            <label for="siblings">If the student has other siblings in this school, please list them:</label>
            <textarea id="siblings" name="siblings" rows="3" placeholder="Names of siblings"></textarea>
        </div>
    </section>
<!-- Proof of Birth -->
    <section>
        <h3>For School Use - Proof of Birth</h3>
        <div class="checkbox-group">
            <label class="inline-label" for="proofOSR"><input type="checkbox" id="proofOSR" name="birthProofs[]" value="Copy in OSR"> Copy in OSR</label>
            <label class="inline-label" for="proofBaptismal"><input type="checkbox" id="proofBaptismal" name="birthProofs[]" value="Baptismal Record"> Baptismal Record</label>
            <label class="inline-label" for="proofBirthReg"><input type="checkbox" id="proofBirthReg" name="birthProofs[]" value="Birth Registration"> Birth Registration</label>
            <label class="inline-label" for="proofBirthCert"><input type="checkbox" id="proofBirthCert" name="birthProofs[]" value="Birth Certificate"> Birth Certificate</label>
            <label class="inline-label" for="proofImmigration"><input type="checkbox" id="proofImmigration" name="birthProofs[]" value="Immigration Papers/Card"> Immigration Papers/Card</label>
            <label class="inline-label" for="proofPassport"><input type="checkbox" id="proofPassport" name="birthProofs[]" value="Passport"> Passport</label>
            <label class="inline-label" for="proofOther"><input type="checkbox" id="proofOther" name="birthProofs[]" value="Other"> Other</label>
        </div>
    </section>
<!--Previous School Section-->
    <section>
        <h3>Previous School Information</h3>
        <div class="two-column">
            <div class="form-group">
                <label for="prevSchoolBoard">Name of Previous School Board / Municipality:</label>
                <input type="text" id="prevSchoolBoard" name="prevSchoolBoard">
            </div>
            <div class="form-group">
                <label for="lastDateAttended">Last date attended:</label>
                <input type="date" id="lastDateAttended" name="lastDateAttended">
            </div>
            <div class="form-group">
                <label for="prevSchoolName">Name of Previous School:</label>
                <input type="text" id="prevSchoolName" name="prevSchool">
            </div>
            <div class="form-group">
                <label for="gradeAtPrevSchool">Grade at previous school:</label>
                <input type="text" id="gradeAtPrevSchool" name="prevGrade">
            </div>
        </div>

        <div class="form-group radio-group">
            <label>Language of Instruction:</label>
            <label class="inline-label" for="langEnglish"><input type="radio" id="langEnglish" name="languageInstruction" value="English" checked> English</label>
            <label class="inline-label" for="langFrench"><input type="radio" id="langFrench" name="languageInstruction" value="French"> French</label>
            <label class="inline-label" for="langOther"><input type="radio" id="langOther" name="languageInstruction" value="Other"> Other</label>
        </div>

        <div class="form-group">
            <label for="reasonForTransfer">Reason for Transfer:</label>
            <textarea id="reasonForTransfer" name="reasonTransfer" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label>Did the student ever attend a Waterloo Region District School Board school in the past?</label>
            <div class="radio-group">
                <label class="inline-label" for="wrdsbYes"><input type="radio" id="wrdsbYes" name="wrdsbPast" value="Yes"> Yes</label>
                <label class="inline-label" for="wrdsbNo"><input type="radio" id="wrdsbNo" name="wrdsbPast" value="No" checked> No</label>
            </div>
        </div>
        <div class="form-group">
            <label for="wrdsbSchools">If yes, name school(s):</label>
            <input type="text" id="wrdsbSchools" name="wrdsbSchools">
        </div>
    </section>
<!-- Health Information Section -->
    <section>
        <h3>Health Information</h3>
        <div class="two-column">
            <div class="form-group">
                <label for="medicalConditions">Medical Conditions (include info on special equipment or medication if required):</label>
                <textarea id="medicalConditions" name="medicalConditions" rows="4"></textarea>
            </div>
            <div>
                <div class="form-group">
                    <label>For School Use</label>
                    <div class="checkbox-group">
                        <label class="inline-label" for="immunizationProvidedCheckbox">
                            <input type="checkbox" id="immunizationProvidedCheckbox" name="immunizationProvided"> Immunization Record provided:
                        </label>
                        <div class="radio-group" style="margin-top: 5px;">
                            <label class="inline-label" for="immunizationYes"><input type="radio" id="immunizationYes" name="immunizationStatus" value="Yes"> Yes</label>
                            <label class="inline-label" for="immunizationNo"><input type="radio" id="immunizationNo" name="immunizationStatus" value="No" checked> No</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Does the student require an epi-pen?</label>
                    <div class="radio-group">
                        <label class="inline-label" for="epiPenYes"><input type="radio" id="epiPenYes" name="epiPenStatus" value="Yes"> Yes</label>
                        <label class="inline-label" for="epiPenNo"><input type="radio" id="epiPenNo" name="epiPenStatus" value="No" checked> No</label>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Citizenship Information -->
    <section>
        <h3>Citizenship Information</h3>
        <div class="two-column">
            <div>
                <div class="form-group">
                    <label for="birthCountry">Birth Country:</label>
                    <input type="text" id="birthCountry" name="birthCountry">
                </div>
                <div class="form-group">
                    <label for="provinceOfBirth">If Canada, Province of Birth:</label>
                    <input type="text" id="provinceOfBirth" name="provinceOfBirth">
                </div>
                <div class="form-group">
                    <label for="countryCitizenship">Country of Citizenship:</label>
                    <input type="text" id="countryCitizenship" name="countryCitizenship">
                </div>
                <div class="form-group">
                    <label for="dateEnteredCanada">If student not born in Canada, provide date student entered Canada to live for the first time:</label>
                    <input type="date" id="dateEnteredCanada" name="dateEnteredCanada">
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>For School Use - Status in Canada:</label>
                    <div class="checkbox-group">
                        <label class="inline-label" for="statusCanadian"><input type="checkbox" id="statusCanadian" name="statusCanada[]" value="Canadian Citizen"> Canadian Citizen</label>
                        <label class="inline-label" for="statusStudyPermit"><input type="checkbox" id="statusStudyPermit" name="statusCanada[]" value="Study Permit/Student Visa"> Study Permit/Student Visa</label>
                        <label class="inline-label" for="statusNative"><input type="checkbox" id="statusNative" name="statusCanada[]" value="Native Ancestry"> Native Ancestry</label>
                        <label class="inline-label" for="statusOther">
                            <input type="checkbox" id="statusOther" name="statusCanada[]" value="Other"> Other (specify):
                            <input type="text" name="statusOtherText" placeholder="Specify other status">
                        </label>
                        <label class="inline-label" for="statusPermanent"><input type="checkbox" id="statusPermanent" name="statusCanada[]" value="Permanent Resident/Landed Immigrant"> Permanent Resident/Landed Immigrant</label>
                        <label class="inline-label" for="statusRefugee"><input type="checkbox" id="statusRefugee" name="statusCanada[]" value="Refugee Claimant"> Refugee Claimant</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="inline-label" for="verificationOSR">
                        <input type="checkbox" id="verificationOSR" name="verificationOSR"> Verification in OSR
                    </label>
                </div>
            </div>
        </div>
    </section>

    <input type="submit" value="Register">

</form>

</body>
</html>