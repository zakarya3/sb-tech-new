<head>
    <style>
    table, th, td {
      border: 1px solid;
    }
    </style>
</head>


<h3>vous avez une commande {{ $trackin }} de {{ $user_name }} </h3>
<h3>Adresse : {{ $address }}</h3>
<h3>Date : {{ $date }}</h3>
<h3>Prix Total : {{ $price }} MAD</h3>
@if ($choice == 0)
    <h3>Mode de paiement : Par chèque</h3>
@else
    <h3>Mode de paiemnt : Payer comptant à la livraison</h3>
@endif
<table>
    <tr>
      <th>Nom</th>
      <th>Coût unitaire</th>
      <th>Quantité</th>
      <th>Montant</th>
    </tr>
    @foreach ($orders as $item)
    <tr>
        <td>{{ $item->product->product_name }}</td>
        <td>{{ $item->price }}</td>
        <td>{{ $item->qty }}</td>
        <td>{{ $item->price * $item->qty }}</td>
      </tr>
    @endforeach
</table>

<a href="{{ url('https://www.sbtech.ma/admin/view-order/'.$id) }}">Pour plus de détails</a>