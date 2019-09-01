<?php 
include 'header.html';
?>
<section id="about">
  <div>
   <div class="about-content container-fluid">
     
      <h3 class="heading">About Us</h3>

    <p>
       <span class="show-first">We are a team of freelancers specialized in Web Development and Graphic Designs.</span> <span class="show-second">We do not just use WordPress we design websites that are purely based on coding like HTML, CSS, Bootstrap, Javascript, React for front-end design and Php and Node.js for the backend.</span><span class="show-third"> They are much safer and customizable. </span> <span class='show-fourth'> All types of designs and logos are done with the help of advanced level photoshop. We will provide you with your own domain name and help you deploy your website online.</span>
    </p>
   </div>              
   </div>	
</section>


<section id="services">
   <h1 class="serv-head"><strong>Our Services</strong></h1>
   <hr>
   
 
     
 <div class="web-services row">
 	 
   <div class="col-sm-12">
   	    
         <div class="services-heading">
          <h3 >Web Development</h3>
         </div>    
    <div class="row">
   	 	<div class="col-sm-4">
   	 	
   	 		<div class="card bg-light mb-3"  data-aos="fade-up">
   	 		 <div class="card-header">
   	 		   <img src="images/responsive.png">
   	 	      </div>             
             <div class="card-body">
              <h5 class="card-title"><strong>100% Responsive Designs</strong></h5>
   	 	      <p class="card-text">We provides best quality responsive designs and ensures that your website adapt to each unique device used to access your site.</p>
              </div>
   	 	     </div>
   	 	    </div>
 
   	    <div class="col-sm-4">
   	 		<div class="card bg-light mb-3 card-creative" data-aos="fade-up">
   	 		 <div class="card-header">
   	 		   <img src="images/creative-design.png">
   	 	      </div>
   	 	      <div class="card-body">
              <h5 class="card-title"><strong>Creative Designs</strong></h5>
   	 	      <p class="card-text">With years of experience in creating smart and trendy designs, we provide quality web design at affordable prices.</p>
              </div>
             </div>
   	 	    </div>
   	 	
   	 	<div class="col-sm-4">
   	 		<div class="card bg-light mb-3" data-aos="fade-up">
   	 		 <div class="card-header">
   	 		   <img src="images/tags.png">
   	 	      </div>
   	 	     <div class="card-body">
              <h5 class="card-title"><strong>Optimized Speed</strong></h5>
   	 	      <p class="card-text">We will analyze your website and make sure that no opportunity to improve page speed performance will go unchecked.</p>
              </div>
             </div>
   	 	    </div>    
   	 </div>
   </div>


  
  
   <div class="col-sm-12">
    <div class="services-heading"> 
     <h3>Graphic Designing</h3>
   	</div> 
     <div class="row">
   	 	<div class="col-sm-4">
      
        <div class="card bg-light mb-3"  data-aos="fade-up">
         <div class="card-header">
           <img src="images/create.png">
            </div>             
             <div class="card-body">
              <h5 class="card-title"><strong>Logo Design</strong></h5>
            <p class="card-text">Create a strong brand identity with a memorable logo design from our team.</p>
              </div>
           </div>
          </div>
 
        <div class="col-sm-4">
        <div class="card bg-light mb-3 card-creative" data-aos="fade-up">
         <div class="card-header">
           <img src="images/layers.png">
            </div>
            <div class="card-body">
              <h5 class="card-title"><strong>Digital Illustrations</strong></h5>
            <p class="card-text">Our artistic minded digital illustrators provides you original design content.</p>
              </div>
             </div>
          </div>
      
      <div class="col-sm-4">
        <div class="card bg-light mb-3" data-aos="fade-up">
         <div class="card-header">
           <img src="images/tags.png">
            </div>
           <div class="card-body">
              <h5 class="card-title"><strong>Optimized Speed</strong></h5>
            <p class="card-text">We will analyze your website and make sure that no opportunity to improve page speed performance will go unchecked.</p>
              </div>
             </div>
          </div> 
   	 </div>
   
   </div>
  </div>
</section>

   <div class="modal fade" id="inquiryModal" role="dialog" style="margin: 25px;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="inquiryModalLabel"> <img class="logo" src="images/logo.png" style="max-width: 50px; max-height: 100px;">  Let's Team Up. Register Now</h3>

          <button type="button" class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="discription">
        <h5 style="font-family: sans-serif; padding: 25px;">Before we begin, we need to know a little more information about you and your project.</h5>
        </div>   

  <div class="form">
    <form id='contact-form' method="POST" action="contact.php" style="margin: 25px;">
       
       <div class="form-group">
       <label><strong>Name</strong><span class="imp">  *</span></label>
       <br>    
         <div class="row">
            <div class="col-sm">
               <input type="text" id="first-name" class="form-control i-text" name="firstName" required>
               <label class="below-text">First Name</label>
            </div>
            <div class="col-sm">
               <input type="text" id="last-name" class="form-control i-text" name="lastName" required>
               <label class="below-text">Last Name</label>
            </div>
         </div> 
         
         <br>
         
         <label><strong>Email</strong><span class="imp">  *</span></label>
         <br>  
         
         <input class="form-control i-text" type="email" name="email" required>

         <br>

         <label><strong>Company</strong></label>
         <br>  
         
         <input class="form-control i-text" type="text" name="company">
         <br>
         
         <label><strong>Project Type</strong><span class="imp">  *</span></label>
         <br>

         <select name="projectType"  class="custom-select i-text" required>
             <option selected>Select</option>
             <option value="Web Design">Web Design</option>
             <option value="Logo/Branding">Logo/Branding</option>
             <option value="Illustrations">Illustrations</option>
             <option value="other">Other</option>
         </select>
              <br><br> 

         <label><strong>Project Budget</strong><span class="imp">  *</span></label>
         <br>  
         
         <input class="form-control i-text" type="number" name="budget" placeholder="$" required> 
         <br>
    
       <label><strong>Quick Message</strong></label>
        
        <textarea name='msg' class="form-control i-text" rows="4" cols="50"></textarea>
       </div>
        <button id='btn-submit' class='btn btn-lg btn-dark' type="submit">Submit!</button>
        <h6 id="result"></h6>
       </form> 

       </div>
    

        </div>
      </div>
    </div>
  </div>


<section id="footer">
  <!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4">

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1">Wanna work with us?</h5>
      </li>
      <li class="list-inline-item">
        <button type="button" data-toggle="modal" id="mybtn2" class="btn btn-lg btn-danger">Hire Us</button>
      </li>
    </ul>
    <!-- Call to action -->

    <hr>

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1" href="https://www.facebook.com/getandpostsol/" target="_blank">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="mailto:getandpostsolutions@gmail.com" class="btn-floating btn-tw mx-1">
          <i class="fas fa-envelope"></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1" href = "https://www.instagram.com/getandpostsolutions/">
         <i class="fab fa-instagram"></i>
        </a>
      </li>
      
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1" href = "https://plus.google.com/106100792238014769474">
         <i class="fab fa-google-plus-g"></i>
        </a>
      </li>

    </ul>
    <!-- Social buttons -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="https://getandpostsolutions.herokuapp.com/">Get & Post Solutions</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

</section>


<img onclick="topFunction()" id="myBtn" title="Go to top" src="images/arrow-up.png">

<script>
  $(document).ready(function () {

     // Attach Button click event listener 
    $("#mybtn,#mybtn1,#mybtn2").click(function(){

         // show Modal
         $('#inquiryModal').modal('show');
    });
});
</script>
<script type="text/javascript">

</script>
<script src="scripts/validation.js"></script>
<script src="scripts/particles.js"></script>
<script src="scripts/app.js"></script>
<script type="text/javascript" src="scripts/vanilla-tilt.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script type="text/javascript" src="scripts/script.js"></script>
<script type="text/javascript" src="scripts/jquery.scrollme.min.js"></script>

</body>
</html>