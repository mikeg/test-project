function confirmDelete()
{
  var ans = confirm("Are you sure you want to delete this?");
  if (ans) 
    return true;
  else
    return false;
}