<div>
  <h2>Meet ByeBye</h2>
</div>
<div class="grid-x">
  <?php $data = [
    [
      'name' => "Devynne Foote",
      'URL' => 'Devynne@byebye.com',
      'image' => '/wp-content/uploads/2017/10/Devynne.jpg'
    ],
    [
      'name' => "Kaeci Durfey",
      'URL' => 'Kaeci@byebye.com',
      'image' => '/wp-content/uploads/2017/10/Kaeci-Durfey-.jpg'
    ],
    [
      'name' => "Chris",
      'URL' => 'chris@byebye.com',
      'image' => '/wp-content/uploads/2017/10/chris.jpg'
    ]
  ];
  ?>
  @foreach ($data as $staff)
    <div class="cell large-4 mais">
      @include('partials.profile-card', [
        'person' => $staff
      ])
    </div>
  @endforeach
</div>
