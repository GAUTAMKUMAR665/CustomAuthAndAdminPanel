


    <section>
        <form action="Editdata" method="post">
            @foreach ( $user as $users )
            <input type="hidden" name="id" id="" value={{ $users->id }}>
            <input type="text" name="name" id="" value={{ $users->name }}>
            <input type="text" name="email" id="" value={{ $users->email }}>
            <input type="text" name="phone" id="" value={{ $users->phone }}>
            <input type="text" name="is_verified" id="" value={{ $users->is_verified }}>
            <input type="hidden" name="_token" id="" value={{Session::token()}}>
            @endforeach
            <input type="submit"  value='submit'/>
           @csrf
        </form>
    </section>
