<div class="grid-x cell text-center">
      <h2>Services</h2>
      <hr>
    </div>
 <?php $data = [
    [
      'name' => "Devynne Foote",
      'price' => '$900',
      'image' => '/wp-content/uploads/2017/10/Devynne.jpg'
    ],
    [
      'name' => "Devynne Foote",
      'price' => '$900',
      'image' => '/wp-content/uploads/2017/10/Devynne.jpg'
    ],
    [
      'name' => "Devynne Foote",
      'price' => '$900',
      'image' => '/wp-content/uploads/2017/10/Devynne.jpg'
    ],
    [
      'name' => "Devynne Foote",
      'price' => '$900',
      'image' => '/wp-content/uploads/2017/10/Devynne.jpg'
    ],
    [
      'name' => "Kaeci Durfey",
      'price' => '$2,098',
      'image' => '/wp-content/uploads/2017/10/Kaeci-Durfey-.jpg'
    ],
    [
      'name' => "Chris",
      'price' => '$598',
      'image' => '/wp-content/uploads/2017/10/Devynne.jpg'
    ]
  ];
  ?>
    <div class="grid-x small-up-2 medium-up-3 large-up-6">
      @foreach ($data as $service)
    <div class="cell large-4">
      @include('partials.service', [
        'person' => $service
      ])
    </div>
  @endforeach
    </div>

    <hr>
