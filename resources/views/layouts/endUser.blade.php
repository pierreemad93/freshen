<!doctype html>
<html lang="en" dir={{ __('endUser.direction') }} data-bs-theme="auto">
    
  <!-- Head -->
  <x-endUser.head/>

  <body>
    <!-- loader-wrapper -->
    <div class="loader-wrapper">
        <div class="spinner-border text-primary p-5" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
  
  	<!-- header top -->
      <x-endUser.headerTop/>
  
  	<!-- header body -->
      <x-endUser.headerBody/>
  
  	<!-- services -->
      <x-endUser.services/>
  
  	<!-- About Us -->
      <x-endUser.aboutUs/>
  
      <!-- Testimonials -->
      <x-endUser.testimonials/>
  
      <!-- Contact us -->
      <x-endUser.contactUs/>
  
      <!-- Footer -->
      <x-endUser.footer/>
  
  	<!-- Back to top button -->
  	<button type="button" class="btn btn-primary btn-back-to-top rounded-circle justify-content-center align-items-center p-2 text-white">
  		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16"> <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/> </svg>
  	</button>
  
  	<!-- Bootstrap JavaScript: Bundle with Popper -->
      <x-endUser.scripts/>
  
  </body>
</html>