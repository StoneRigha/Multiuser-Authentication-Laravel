<x-app-layout>
    <div style="background-color:coral">
        <h1>Admin Dashboard</h1>
    </div>
    <div>
        <form action="{{ url('addSeller') }}" method="POST" >
            @csrf
            <div>
                <label for="">Name    :</label>
                <input type="text" name="name" required="">
            </div>
            <div>
                <label for="">Email   :</label>
                <input type="email" name="email" required="">
            </div>
            <div>
                <label for="">Password:</label>
                <input type="password" name="password" required="">
            </div>
            <div>
                <input type="submit" name="submit">
            </div>
        </form>
    </div>
    </x-app-layout>
    