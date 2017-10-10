<?php include 'include\header.php'; ?>

    <div class="body">

            <header>
              <p>Mathieu Herbay</p>
            </header>

          <div class="menu">
            <ul>
              <li><a class="menu1" href="#page1"><img src=".\assets\images\menu\1.png" alt="menu1"></a></li>
              <li><a class="menu2" href="#page2"><img src=".\assets\images\menu\2.png" alt="menu2"></a></li>
              <li><a class="menu3" href="#page3"><img src=".\assets\images\menu\3.png" alt="menu3"></a></li>
              <li><a class="menu4" href="#page4"><img src=".\assets\images\menu\4.png" alt="menu4"></a></li>
              <li><a class="menu5" href="#page5"><img src=".\assets\images\menu\5.png" alt="menu5"></a></li>
              <li><a class="menu6" href="#page6"><img src=".\assets\images\menu\6.png" alt="menu6"></a></li>
            </ul>
          </div>

        <div class="pages">


          <div id="page1">

            <div class="intro">
              <h3>Quelqu'un de dynamique !</h3>
            </div>

            <div id="img">
              <img id="pp" src=".\assets\images\CV.png" alt="profil">
            </div>

          </div>


          <div id="page2">

            <div id="Présentation">
                  <div class="titre">
                    <h2>Présentation</h2>
                  </div>

                    <div class="liste">
                			<ul>
                        <li>Email: mathieuherbay@hotmail.com</li><br />
                        <li>GSM: 0476/73.28.68</li><br />
                				<li>Age: 25 ans</li><br />
                				<li>Habite: Bruxelles</li><br />
                				<li>Statut: Etudiant</li>
                			</ul>
                  </div>
            </div>
          </div>

          <div id="page3">

            <div id="Compétences">

                    <div class="titre">
                      <h2>Compétences</h2>
                    </div>

                    <div class="work">
                      <img id="progress" src="assets\images\menu\work-in-progress-1024x603.png" alt="in progress">
                    </div>

                    <div class="liste">
                      <ul>
                				<li>Html 0/5</li><br />
                				<li>css 0/5</li><br />
                				<li>php 0/5</li><br />
                			</ul>
                		</div>
        		</div>
          </div>

          <div id="page4">

            <div id="Expériences">

              <div class="titre">
                <h2>Expérience</h2>
              </div>

              <div class="liste">
                <ul>
                  <div id="colonne1">
                    <p><h3>Horeca</h3></p><br />
            					<li>L'improbable</li><br />
            					<li>Chalet robinson</li><br />
                  </div>
          				<div id="colonne2">
                    <p><h3>Menuiserie</h3></p><br />
            					<li>Dans l'entreprise familiale</li>
          				</div>

          			</ul>
          		</div>

        		</div>
          </div>

          <div id="page5">

            <div id="Formations">

              <div class="titre">
                <h2>Formations</h2>
              </div>

              <div class="liste">
                <ul>
                  <div id="colonne1">
                    <li><h3>Gestion</h3></li><br />
            				<p>Formation en gestion de base a l'EFP</p><br />
                  </div>
                  <div id="colonne2">
                    <li><h3>Code</h3></li><br />
            				<p>Formation en codage a BeCode.org</p>
                  </div>
          			</ul>
          		</div>
        		</div>

          </div>

          <div id="page6" class="contact">
            <div class="container">
             <form action="assets\contact.php">

               <div class="titre">
                 <h2>contact</h2>
               </div>

                 <label class="stylecont" for="fname" >First Name : </label>
                 <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>

                 <label class="stylecont" for="lname">Last Name : </label>
                 <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br>

                <label class="stylecont" for="sexe">sexe : </label>
                <select id="sexe" name="sexe">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                 </select><br>

                 <label class="stylecont" for="country">Country : </label>
                 <select id="country" name="country">
                   <option value="Belgium">Belgium</option>
                   <option value="England">England</option>
                   <option value="France">France</option>
                   <option value="Germany">Germany</option>
                   <option value="Holland">Holland</option>
                   <option value="Italy">Italy</option>
                   <option value="Spain">Spain</option>
                   <option value="Other">Other...</option>
                 </select><br>

               <label class="stylecont" for="subject">Subject : </label>
               <textarea id="subject" name="subject" placeholder="Write something.."></textarea><br>

               <input type="submit" value="Submit">

             </form>
           </div>


          </div>

          </div>

        </div>

          <div class="touch" id="txt">
            <p>Touch The Robot At Your Own Risk !</p>
        </div>

    </div>

    <script type="text/javascript" src="assets\js\cvjq.js"></script>
 <span id="bottom"></span>
  </body>
</html>
