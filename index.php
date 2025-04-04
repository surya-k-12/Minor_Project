<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>STUDENTS</h1>
    <hr>
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Register</h1>
      <form method="post" action="register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
       <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>
      <p class="or">
        ----------or--------
      </p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
         
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">
          ----------or--------
        </p>
        <div class="icons">
          <i class="fab fa-google"></i>
          <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
          <p>Don't have account yet?</p>
          <button id="signUpButton">Sign Up</button>
        </div>
      </div>
      <script src="script.js"></script>
     
      <div class="col-md-7">
        <div class="card-body">
            <h1 class="h3 themec font-weight-bold">Instructions</h1><br>
            <p class="fs-ms">Students have to pay the Placement fee of Rs. 2200 [ including 18% GST ]</p><br>
            <p class="fs-ms">(Note: The Placement Fee for PhD students is Rs. 1500 [including 18% GST])</p><br>
            <p class="fs-ms">Kindly go through the Rules and Regulations given below to have a good understanding of the Placement Process.</p><br>
            <p class="fs-ms">The Institute Placement Season is structured to be a year-long process: from July to May. Students from
                different streams: B.Tech., Dual Degree (Integrated B.Tech. + M.Tech.), M.Tech., M.A., M.Sc, M.S. and PhD
                across 16 different branches participate in the two-phase recruitment process. An independent body -
                the Career Development Cell devotedly focuses on the all-around preparation of students for the
                multi-faceted placement process. The registration process starts in August, and pre-interview activities
                like Pre-Placement Talks, Aptitude and Technical tests happen in the September-November period</p><br>
            <p class="fs-ms">Students and scholars are highly encouraged to participate in <a href="https://www.canva.com/design/DAGJzMvZmPM/NFScnH-2VufXPCRe2Yz1_w/edit?utm_content=DAGJzMvZmPM&amp;utm_campaign=designshare&amp;utm_medium=link2&amp;utm_source=sharebutton" target="_blank">CDC/CDC-R sessions</a>, as they are invaluable during your internships and placements. Making good use of this opportunity will not only offer a substantial advantage for career progression but also foster invaluable soft skills crucial for navigating interviews with confidence and professionalism.</p><br>
        </div>
    </div>

    <div class="container-fluid">
        <div class="text-center top-text">
            <h1><span>Placement </span> Guidelines and Policies:</h1><br>
        </div>
        <div class="divider text-center">
            <span class="outer-line"></span>
            
            <span class="outer-line"></span>
        </div>
        <div class="accordion mt-4 pt-2 mb-2" id="faq">
           <div class="card">
               <div class="card-header" id="faqhead1">
                   <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq1" aria-expanded="false" aria-controls="faq1">A. ELIGIBILITY &amp; REGISTRATION</a><br><br>
               </div>

               <div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq" style="">
                   <div class="card-body text-dark">
                       <p>All students who expect to graduate from the Institute by the end of the academic year 2024-2025 and are seeking employment may register for campus placements with this office. Placement Registration is for ONE ACADEMIC YEAR ONLY.</p><br>
                       <p>Registration for all programmes will be done during the month of August.</p><br>
                       <p>MS &amp; PhD scholars’ placement will happen round the year. Their registration will be valid for one year only. They can register by attaching a certificate (NOC) &amp; Abstract in the prescribed format available in the Placement website.</p><br>
                       <p class="text-danger">Inter-disciplinary (ID) Research Scholars will be permitted to upload resumes for both the departments as approved at the time of admission to the program. The NoC for ID Research Scholars must be signed by the guide from both the departments.</p><br>
                       <p>Campus placement is a facility provided for the students. Registration is not compulsory. Students not interested in placement are advised not to register for placement.</p>
                       <p><strong>Backlogs: </strong>Students having backlog of 4 or more courses are not permitted to register for placement. Such students are advised to clear the backlogs and then register after the July-November end semester examinations. However, extended students can register in case of non-completion of course/project requirements in their last two semesters.</p><br>
                       <p><b>Re-Registration </b>: Students who have lost the job for genuine reasons will be allowed to re-register on a case to case basis.</p><br>
                       <p>Students who have graduated in 2024, but not placed due to various genuine reasons, may be permitted to re-register with the approval of the concerned authorities. They will be permitted to appear for placement only from Day 1 or later, as approved by the Board of Placements.</p><br>
                       <p>Each registered student will be given a Placement Registration (PR) Number to access the placement notices, company announcements and to upload resumes.</p><br>
                       <p><strong>*The registration fee will not be refunded under any circumstance.</strong></p><br>
                   </div>
               </div>
           </div>
           <div class="card">
               <div class="card-header" id="faqhead2">
                   <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2" aria-expanded="true" aria-controls="faq2">B. RESUME</a><br><br>
               </div>

               <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                   <div class="card-body">
                       <p class="pt-2">Students are advised to read the announcements made, go through the company website and apply only if interested.</p><br>
                       <p>Students are expected to follow the institute resume template available in the placement website for preparing the resumes.</p><br>
                       <p>The details given in the resume have to be genuine and any student found violating this rule will be disallowed from the placement for the rest of the academic year.</p><br>
                       <p>Students have to upload and submit their resumes on the website to individual companies well before the deadline. Resume once submitted cannot be modified. <strong>DEADLINES WILL NOT BE EXTENDED UNDER ANY CIRCUMSTANCE.</strong></p><br>
                   </div>
               </div>
           </div>
           <div class="card">
               <div class="card-header" id="faqhead3">
                   <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3" aria-expanded="true" aria-controls="faq3">C. PRE-PLACEMENT TALKS (PPT)</a><br>
               </div>

               <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                   <div class="card-body">
                       <p class="pt-2">Notices of the PPT will be published in the placement website well in advance. Students should be seated in the venue 15 minutes before the scheduled start of the PPT.</p><br>
                       <p>Students interested in a particular company, can attend its PPT. Attendance for PPT is not compulsory.</p><br>
                       <p>Students <strong>must go through</strong> the complete selection process of a particular company, once their resumes are uploaded.</p><br>
                       <p>Any clarification regarding salary break-up, job profile, place of work, bond details etc. must be sought from the companies during PPT or interview.</p><br>
                       <p>DRESS CODE: Students must be formally dressed whenever they participate in any interaction with a company</p><br>
                       <p><strong>**This office reserves the right to refuse permission to a student to attend the selection process/PPT, if they do not dress up formally. Students are expected to know the norms for formal wear; for the benefit of those who claim ignorance, please note that the following are strictly not allowed:</strong></p><br>
                       <ul class="list-styled olclass">
                           <li>T-shirts with printed text; un-collared T-shirts;</li>
                           <li>Shorts</li>
                           <li>Jeans</li>
                           <li>Shirt not-tucked in</li>
                           <li>Chappals / flip-flops</li>
                       </ul><br>
                   </div>
               </div>
           </div>
           <div class="card">
               <div class="card-header" id="faqhead4">
                   <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4" aria-expanded="true" aria-controls="faq4">D. PLACEMENT PROCESS</a><br><br>
               </div>

               <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                   <div class="card-body">
                       <p class="pt-2">It is the responsibility of the student to check announcements / notices / updated information / shortlisted names etc. in the notice boards of Placement Website. Students are expected to be punctual.</p><br>
                       <p><u>ATTENDANCE &amp; PUNCTUALITY:</u></p><br>
                       <p>a) A student who applies and gets shortlisted for interviews is bound to go through the entire selection process unless rejected midway by the company. Any student who withdraws deliberately in the middle of a selection process will be disallowed from placement for the rest of the academic year.</p><br>
                       <p>b) <strong>LATE COMERS FOR APTITUDE TEST / GD / INTERVIEW </strong>may not be allowed to appear for the selection process.</p><br>
                       <p><u>DISCIPLINE:</u></p><br>
                       <p>a) Students should maintain discipline and show ethical behaviour in every action they take during the placement process. Any student found violating the discipline rules set by the company or defaming the institute's name will be disallowed from the placements for the rest of the academic year.</p><br>
                       <p>b) Students found cheating or misbehaving in the selection process (Test / GD / Interview) will be disallowed from the placements for the rest of the academic year.</p><br>
                   </div>
               </div>
           </div>
           
            
           
       </div>
    
    </div>
</body>
</html>