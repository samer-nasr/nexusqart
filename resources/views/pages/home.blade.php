<x-layout title="Websites & software, thoughtfully built">
  <section class="studio-hero container">
    <div class="studio-hero-copy">
      <p class="eyebrow"><span class="status-dot"></span> DESIGN MINDED. ENGINEERING DRIVEN.</p>
      <h1>Websites, software<br><span>and AI solutions<br>for your business.</span></h1>
      <p class="studio-lead">Launch a business website, connect your tools, or automate a workflow. We design and develop solutions around the way your business works.</p>
      <div class="button-group"><a class="button button-dark" href="{{ route('contact') }}">Contact us <span aria-hidden="true">↗</span></a><a class="text-link" href="{{ route('nexa') }}">Explore Nexa <span aria-hidden="true">↓</span></a></div>
      <div class="hero-disciplines"><span>Web experiences</span><span>Custom software</span><span>AI & automation</span></div>
    </div>
    <x-studio-art />
  </section>
  <div class="studio-ticker"><div class="container"><span>IDEAS INTO EXPERIENCES</span><p>Strategy <b aria-hidden="true">✳</b> Design <b aria-hidden="true">✳</b> Development <b aria-hidden="true">✳</b> Launch</p><span class="ticker-note">ONE CONNECTED APPROACH</span></div></div>
  <section class="container section studio-intro">
    <div><p class="eyebrow">A DIFFERENT KIND OF PARTNER</p><a class="button button-dark" href="{{ route('about') }}">Get to know Nexus Qart <span aria-hidden="true">↗</span></a></div>
    <div><h2>From your first website<br>to the tools<br><span class="muted">your team uses daily.</span></h2><p class="large-copy">We build responsive websites, custom business applications, and integrations between your existing systems. We also develop Nexa, our digital menu and catalogue product.</p></div>
  </section>
  <section class="section studio-services"><div class="container">
    <div class="section-heading"><div><p class="eyebrow">WHAT WE BRING TO THE TABLE</p><h2>What we can build<br>for your business.</h2></div><a class="text-link" href="{{ route('services') }}">Our capabilities <span aria-hidden="true">↗</span></a></div>
    <x-service-list />
  </div></section>
  <section id="selected-work" class="container section studio-work">
    <div class="section-heading"><div><p class="eyebrow">NOT JUST IDEAS. OUR OWN PRODUCT.</p><h2>Meet the work.</h2></div><a class="text-link" href="{{ route('products') }}">All products ↗</a></div>
    <div class="work-showcase">
      <div class="work-copy"><span class="pill">NEXA BY NEXUS QART</span><h3>A small scan.<br>A bigger<br><span>experience.</span></h3><p>Menus, catalogues, and AI conversations. Nexa puts your business in your customers’ hands, with your brand at the center.</p><div class="work-tags"><span>Digital catalogue</span><span>Brand customization</span><span>AI assistance</span></div><a class="button button-white" href="{{ route('nexa') }}">Discover Nexa <span aria-hidden="true">↗</span></a><span class="work-caption">OUR FIRST PRODUCT. ROOM FOR WHAT’S NEXT.</span></div>
      <div class="work-screens"><x-product-preview loading="lazy" /></div>
    </div>
  </section>
  <section class="container section studio-process"><div class="section-heading"><div><p class="eyebrow">HOW WE GET THERE</p><h2>A thoughtful process.<br>A tangible result.</h2></div><p>Clarity at every step.<br>Care in every detail.</p></div>
    <div class="three-grid"><article class="value-card"><span>UNDERSTAND</span><h3>Start with why.</h3><p>Your goals, your audience, your constraints. We get the brief right before we get building.</p></article><article class="value-card"><span>CREATE</span><h3>Make it real.</h3><p>We bring the interface and the engineering together, with something concrete to review and refine.</p></article><article class="value-card"><span>DELIVER</span><h3>Ready for the world.</h3><p>Test the details, prepare the launch, and give you the knowledge to manage what comes next.</p></article></div>
  </section>
  <x-cta />
</x-layout>
