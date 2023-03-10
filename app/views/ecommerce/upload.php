<?php $this->view("ecommerce/header", $data); ?>

<div style="min-height: 400px;">
   <section class="section background-white">
    <p><?php check_message() ?></p>
            <div class="s-12 m-12 l-4 center">
              <h4 class="text-size-20 margin-bottom-20 text-dark text-center">Upload</h4>
              <form name="contactForm" class="customform" method="post" enctype="multipart/form-data">
                <div class="s-12"> 
                  <input name="title" class="subject" placeholder="Title" title="Title" type="text" required>
                  <p class="subject-error form-error">Please enter the title.</p>
                </div>
                <div class="s-12"> 
                  <input name="file" class="subject" title="Subject" type="file">
                  <p class="subject-error form-error">Please slecet file.</p>
                </div>
                <div class="s-12">
                  <textarea name="description" class="required message" placeholder="Description" rows="3"></textarea>
                  <p class="message-error form-error">Please enter your description.</p>
                </div>
                <div class="s-12"><button class="s-12 submit-form button background-primary text-white" type="submit">Submit Button</button></div>
              </form>
            </div>           
          </section> 
</div>
<?php $this->view("ecommerce/footer", $data); ?>

