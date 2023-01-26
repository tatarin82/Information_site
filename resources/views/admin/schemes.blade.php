<form action="schemes/add" method="POST" enctype="multipart/form-data">
    @csrf    
    <input type="file" name="pdf" accept="document/*">
    <input type="submit">
    </form>