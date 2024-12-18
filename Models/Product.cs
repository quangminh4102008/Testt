namespace WebApplication5.Models;

public class Product
{
    public long Id { get; set; }
    public String Name { get; set; }
    public long Price { get; set; }
    public virtual List<OrderDetail> OrderDetails { get; set; }
}