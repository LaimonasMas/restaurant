<form method="POST" action="{{route('menu.update',[$menu->id])}}">
   Title: <input type="text" name="menu_title" value="{{$menu->title}}">
   Price: <input type="text" name="menu_price" value="{{$menu->price}}">
   Weight: <input type="text" name="menu_weight" value="{{$menu->weight}}">
   Meat: <input type="text" name="menu_meat" value="{{$menu->meat}}">
   About: <textarea name="menu_about">{{$menu->about}}</textarea>
   @csrf
   <button type="submit">EDIT</button>
</form>