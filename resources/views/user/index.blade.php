<h1>Data Users</h1>

<h2>Pluck - Nama Saja</h2>
@foreach ($userNames as $name)
    {{ $name }} <br>
@endforeach

<h2>Jumlah Users:</h2>
<p>Total: {{ $userCount }}</p>

<h2>User Diurutkan (orderBy name):</h2>
@foreach ($orderedUsers as $user)
    {{ $user->name }} <br>
@endforeach

<h2>User Pertama (limit):</h2>
@foreach ($limitedUsers as $user)
    {{ $user->name }} <br>
@endforeach
