@php
  $informationCards = collect([
      [
          'title' => 'Disclaimer',
          'icon' => 'exclamation-circle',
          'description' => 'Learning Sandbox Online is not affiliated with <a href="https://moodle.com">Moodle HQ</a>',
      ],
      [
          'title' => 'Automatic Reset',
          'icon' => 'hourglass-half',
          'description' => 'Every hour, at 30 minutes past the hour, each Moodle instance is reset to default content and
          configuration.',
      ],
      [
          'title' => 'Additional Plugins',
          'icon' => 'puzzle-piece',
          'description' => 'The installation of additional plugins are disabled in order to make the automatic upgrade possible.',
      ],
      [
          'title' => 'Emails',
          'icon' => 'envelope',
          'description' => 'The sending of email messages is disabled to prevent spam.',
      ],
  ])->transform(function ($informationCard) {
      return (object) $informationCard;
  });

@endphp

<div class="prose-invert hero">
  <div class="hero-content -z-50 grid w-full grid-cols-1 items-start bg-base-200 md:grid-cols-3">

    @foreach ($informationCards as $informationCard)
      <div class="card h-full border shadow-lg">
        <div class="card-body">
          <h2 class="card-title"><i class="las la-{{ $informationCard->icon }}"></i> {{ $informationCard->title }}</h2>
          <p>{!! $informationCard->description !!}</p>
        </div>
      </div>
    @endforeach

  </div>
</div>
