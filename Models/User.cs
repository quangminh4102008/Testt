namespace WebApplication5.Models;

public class User
{
    public long Id { get; set; }
    public String Email { get; set; }
    public String Name { get; set; }
    public virtual List<Order> Orders { get; set; }
}