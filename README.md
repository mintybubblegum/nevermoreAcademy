<div align="center"><img src="https://user-images.githubusercontent.com/116546588/220184665-6d09e393-a07a-47a3-a9a6-d0cbc5f2feda.png" width="400"/></div>

<h2>1. Project description:</h2>
<ul>
<li>The client has asked us to design and develop a scholar aplication for students and Teachers.</li>
<li>First, both of them must to log in to identify themselves as user or admin.</li>
<li>In this app, students (users) should be able to visualize their grades while the teacher (admin) can see the students list with the quarterly grades, and add students if needed; they can also see the student profile where edit the student data or add (and edit) their respective exam grades.</li>

</ul>

<h2>2. User stories:</h2>

<h3>2.1 User Story (User):</h3>
<ul>
<li>Being able to register in the app as user.</li>
<li>See the subjects and their respective exam grades.</li>
<li>See the average grade (trimestral and final).</li>
</ul>

<h3>2.2 User Story (Admin):</h3>
<ul>
<li>Enter app as admin.</li>
<li>View student list with trimestral average.</li>
<li>Add new student.</li>
<li>See student profile.</li>
<li>Edit student data.</li>
<li>Edit student exam grades.</li>
<li>Add student grades.</li>
<li>Close trimester and year.</li>
</ul>

<h2>3. Fullstack Developer Team</h2>

- [Natalia Palomo](https://github.com/Nataliaplm) - SCRUM Master
- [Veronika Komarova](https://github.com/VeronikaKoma) - Product Owner
- [Noa Trujillo Zamora](https://github.com/mintybubblegum) - Developer
- [Alesia Baldeon](https://github.com/AlesiaCoder) - Developer
- [Sandra León](https://github.com/sandraldr27) - Developer


<h2>4. Project Demo</h2>
<div style="display:flex; flex-wrap:wrap; justify-content:center; margin:auto">
<img style="width:550px; height:380px; margin:12px" src="https://user-images.githubusercontent.com/116546588/220195272-91a02282-4e7e-4d53-88c0-8fc9cfee0e0d.PNG" alt="Preliminary project demo"/>
</div>

<h2>5. Sketch</h2>
<div style="display:flex; flex-wrap:wrap; justify-content:center; margin:auto">
<img style="width:600px; height:400px; margin:12px" src="https://user-images.githubusercontent.com/116545731/216052528-26ba1e22-fbeb-4e5d-ba67-d899dfff8117.png" alt="initialSketch"/>
</div>

<h2>6. Atomic Design</h2> 
<div style="display:flex; flex-wrap:wrap; justify-content:center; margin:auto">
<img style="width:250px; height:400px; margin:12px" src="https://user-images.githubusercontent.com/116546588/220184970-ead0de28-4f28-48f7-9a37-316cfac777cd.png" alt="Atomic Design"/>
</div>

<h2>7. Mockup</h2> 
<div style="display:flex; flex-wrap:wrap; justify-content:center; margin:auto">
<img style="width:500px; height:380px; margin:12px" src="https://user-images.githubusercontent.com/116546588/220185148-1d549ae7-b90d-4db5-8f91-8d60a45a7832.png" alt="Home Blade"/>
</div>

<div style="display:flex; flex-wrap:wrap; justify-content:center; margin:auto">
<img style="width:500px; height:380px; margin:12px" src="https://user-images.githubusercontent.com/116546588/220185651-4ee05f8a-0e48-4aa6-80c9-3874e8e1291b.png" alt="Create User Blade"/>
</div>

<div style="display:flex; flex-wrap:wrap; justify-content:center; margin:auto">
<img style="width:500px; height:380px; margin:12px" src="https://user-images.githubusercontent.com/116546588/220185779-51fb7d67-dcc0-4b3c-ab47-eec69c5a49a7.png" alt="Show User Blade"/>
</div>

<div style="display:flex; flex-wrap:wrap; justify-content:center; margin:auto">
<img style="width:300px; height:500px; margin:12px" src="https://user-images.githubusercontent.com/116546588/220185965-c1fb837b-70f3-4924-a846-0bb2fe59fa01.png" alt="Show User Blade"/>
</div>

<h2>8. Stacks</h2>
<ul>
<li>HTML5</li>
<li>CSS3</li>
<li>PHP</li>
<li>Laravel</li>
<li>Boostrap</li>
<li>NPM</li>
</ul>

<h2>9. Required:</h2>
<li>NPM Installed.</li>
<li>PHP (Minimum, version 7.4).</li>
<li>Composer & Laravel Installed and updated to latest version.</li>
<li>XAMPP/LAMPP Installed.</li>
<li>MySQL.</li><br>

<h3>To install our project</h3>
<li>Open IDE</li>
<li>Copy in the terminal: git clone https://github.com/AlesiaCoder/nevermoreAcademy.git</li>
<li>Type in the IDE terminal: <b>npm install</b> and press intro.</li>
<li>In the IDE run <b>git clone</b> command, an paste the HTTPS.</li>
<li>Write in the IDE terminal the command: <b>composer update</b>.</li>
<li>An <b>.env</b> file (in the form of a little wheel) will be downloaded. Go into it and rename the line <b>DB_DATABASE</b>. Change the name generated by default and write <b>nevermoreacademy.</b></li>
<li>Open XAMPP or LAMPP.</li>
<li>Login to <b>phpMyAdmin</b> and create a new database named <b>nevermoreacademy.</b></li>
<li>Type in the IDE terminal: <b>php artisan migrate:fresh --seed</b> and press intro.</li>
<li>Type in the IDE terminal: <b>npm run dev</b> and press intro. Then open another terminal in the IDE without closing the previous one</li>
<li>Type in the IDE terminal: <b>php artisan migrate</b> and press intro</li>
<li>Type in the IDE terminal: <b>php artisan serve</b> and press intro.</li><br>

<h3>Warning & Testing</h3>
<ol>
<li><b>Important</b>: If we then need to run more commands in the IDE, we'll open a third terminal without closing the previous two.</li>
<li><b>Test</b>: Run in the IDE <b>php artisan test</b> & <b>vendor/bin/phpunit</b> where it should return the following result:<b> 5 passed</b> and <b> OK (5 test, 12 assertions)</b></li>
</ol>

<div style="display:flex; flex-wrap:wrap; justify-content:center; margin:auto">
<img style="width:600px; height:320px; margin:12px" src="https://user-images.githubusercontent.com/116546588/220187613-bf5fecdc-a4f9-411a-9370-9338fa384010.PNG" alt="finalTest"/>
</div>

<h2>10. Methodology:</h2>
<ul>
<li>Mob programming.</li>
<li>Pair programming.</li>
<li>Solo programming.</li>
<li>Agile with SCRUM</li>
</ul>

<h2>11. Next Steps</h2>
<ul>
<li>Implement the Drag & Drop.</li>
<li>Continue implementing the design.</li>
<li>Continue implementing the calculation of the average of the grades.</li>
<li>Adapt the view of the teacher and student show.</li>
<li>Add functionality to the trimester closing buttons</li>
</ul>





