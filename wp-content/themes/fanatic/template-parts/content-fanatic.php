<?php
/*
 * Template Name: Fanatic
 * author: Rahat Hussain
 * email: support@iamrahat.uk
 *
 */
 ?>
 <?php
 do_action( 'neve_do_single_page' ); ?>
 <?php get_header(); ?>

 <form id="regForm" action="">

<h1>Register:</h1>

<!-- One "tab" for each step in the form: -->
<div class="tab">Name:
  <p><input placeholder="First name..." oninput="this.className = ''"></p>
  <p><input placeholder="Last name..." oninput="this.className = ''"></p>
</div>

<div class="tab">Contact Info:
  <p><input placeholder="E-mail..." oninput="this.className = ''"></p>
  <p><input placeholder="Phone..." oninput="this.className = ''"></p>
</div>

<div class="tab">Birthday:
  <p><input placeholder="dd" oninput="this.className = ''"></p>
  <p><input placeholder="mm" oninput="this.className = ''"></p>
  <p><input placeholder="yyyy" oninput="this.className = ''"></p>
</div>

<div class="tab">Login Info:
  <p><input placeholder="Username..." oninput="this.className = ''"></p>
  <script src="wp-content/themes/fanatic/assets/src/js/vue.js" type="module"></script>
  <p><input v-model="password" v-ispasswordsafe @safe="isPasswordSafe" type="password" placeholder="Your password"></p>
  <h4 v-if="isSafe">Your password should be good to go :)</h4>
  <h4 v-if="isSafe === false"
    class="error">Your password has been leaked and you <b>shouldn't</b> use it!</h4>


</div>

<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>

</form>

 <?php get_footer(); ?>
