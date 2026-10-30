<div class="service-list">
  @foreach ([
    ['Websites & digital experiences', 'Responsive business websites with clear navigation, product or service pages, and direct contact options.', 'Web design', 'Development', 'web'],
    ['Custom software', 'Custom applications, internal dashboards, and integrations built around your team’s processes.', 'Business tools', 'Integrations', 'software'],
    ['AI & automation', 'AI integrations and automated workflows that help your team handle repetitive tasks and work with business information.', 'Workflow design', 'AI integration', 'ai'],
    ['Technology consulting', 'Requirements planning, system reviews, and guidance on choosing the technology for your next project.', 'Discovery', 'Technical strategy', 'strategy']
  ] as [$heading, $copy, $tagOne, $tagTwo, $icon])
    <article class="service-row" id="service-{{ $icon }}">
      <div class="service-card-top"><span class="service-icon" aria-hidden="true"><svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        @if ($icon === 'web')
          <rect x="4" y="6" width="24" height="20" rx="3"/><path d="M4 12h24M9 9h.1M13 9h.1M9 17h7M9 21h12"/>
        @elseif ($icon === 'software')
          <path d="m11 10-7 6 7 6m10-12 7 6-7 6M18 7l-4 18"/>
        @elseif ($icon === 'ai')
          <path d="m16 3 3.5 9.5L29 16l-9.5 3.5L16 29l-3.5-9.5L3 16l9.5-3.5Z"/>
        @else
          <circle cx="16" cy="16" r="12"/><path d="m21 11-3 7-7 3 3-7Z"/>
        @endif
      </svg></span></div>
      <div class="service-card-body"><h3>{{ $heading }}</h3><p>{{ $copy }}</p></div>
      <div class="service-card-bottom"><div class="tags"><span>{{ $tagOne }}</span><span>{{ $tagTwo }}</span></div><a href="{{ route('contact', ['interest' => $heading]) }}" class="circle-link" aria-label="Discuss {{ strtolower($heading) }}">↗</a></div>
    </article>
  @endforeach
</div>
