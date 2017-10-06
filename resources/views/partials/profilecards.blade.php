<div>
  <h2>Meet ByeBye</h2>
</div>
<div class="grid-x">
  <?php $data = [
    [
      'name' => "Chris",
      'URL' => 'http://asdf'
    ],
    [
      'name' => "Suz",
      'URL' => 'http://asdf'
    ],
    [
      'name' => "Ben",
      'URL' => 'http://asdf'
    ]
  ];
  ?>
  @foreach ($data as $staff)
    <div class="cell large-4">
      @include('partials.profile-card', [
        'person' => $staff
      ])
    </div>
  @endforeach
</div>