<!DOCTYPE html>
<html>
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<body>

<h2>Coffee Break Preferences</h2>

<table style="width:100%">
    @if(empty($coffeeBreakPreferenceRepository))
        <strong>There are no Preferences for today</strong>
    @else
    <tr>
        <th>Staff Member</th>
        <th>Preferences</th>
    </tr>
        @foreach($coffeeBreakPreferenceRepository as $preference)
    <tr>
        <td>{{$preference->staffMembers->name}}</td>
        <td>{{$preference->preferences = json_encode($preference->preferences)}}</td>
    </tr>
    @endforeach
    @endif
</table>

</body>
</html>