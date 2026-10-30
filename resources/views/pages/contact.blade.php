<x-layout title="Contact us" description="Call, email, or connect with Nexus Qart on Instagram to discuss your project.">
  <section class="container page-hero"><p class="eyebrow">CONTACT NEXUS QART</p><h1>Tell us about<br><span class="accent-text">your project.</span></h1><p class="page-intro">Need a website, custom software, or help with Nexa? Choose the easiest way to reach us.</p></section>
  @php
    $interest = request()->query('interest');
    $subject = is_string($interest) ? mb_substr($interest, 0, 160) : 'A new project';
    $mailto = 'mailto:'.config('portfolio.contact_email').'?subject='.rawurlencode('Nexus Qart — '.$subject);
  @endphp
  <section class="container contact-options" aria-label="Ways to contact us">
    <article class="contact-card"><p class="eyebrow">CALL</p><h2>Talk to us</h2><p class="contact-detail">{{ config('portfolio.contact_phone') }}</p><a class="button button-dark" href="tel:{{ config('portfolio.contact_phone_uri') }}">Call us ↗</a></article>
    <article class="contact-card"><p class="eyebrow">EMAIL</p><h2>Send your brief</h2><p class="contact-detail">{{ config('portfolio.contact_email') }}</p><a class="button button-dark" href="{{ $mailto }}" data-event="contact_email_clicked" data-location="contact">Email us ↗</a><p class="small-note">Opens your email app.</p></article>
    <article class="contact-card"><p class="eyebrow">INSTAGRAM</p><h2>Connect with us</h2><p class="contact-detail">&#64;{{ config('portfolio.instagram_handle') }}</p><a class="button button-dark" href="{{ config('portfolio.instagram_url') }}">Open Instagram ↗</a></article>
  </section>
  <section class="container contact-grid contact-guidance">
    <div><p class="eyebrow">YOUR PROJECT BRIEF</p><h2>A few details<br>to get started.</h2><p>Share what you need and any existing website or tools. These details help us understand the scope before discussing next steps.</p></div>
    <div class="contact-aside"><p class="eyebrow">WHAT TO INCLUDE</p><ul class="brief-list"><li><div><h3>A little about you</h3><p>Your company and the people you serve.</p></div></li><li><div><h3>What you need</h3><p>The website, application, or workflow you want to build or improve.</p></div></li><li><div><h3>Your starting point</h3><p>Existing tools, requirements, and your preferred timeline.</p></div></li></ul><div class="login-note"><strong>Looking for your QR menu account?</strong><a class="text-link" href="{{ config('portfolio.nexa_login_url') }}" data-event="nexa_login_clicked" data-location="contact">Go to Nexa login ↗</a></div></div>
  </section>
</x-layout>
