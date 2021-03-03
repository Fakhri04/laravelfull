<table border>
    <tr>
        <td>id of student</td>
        <td>name of student</td>
    @foreach ($students as $student) 
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
    </tr>
    @endforeach
</table>