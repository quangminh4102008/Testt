namespace WebApplication5.Models;

public class OrderDetail
{
    public long OrderId { get; set; }
    public long ProductId { get; set; }
    public int Quantity { get; set; }
    public long UnitPrice { get; set; }
    public virtual Order Order { get; set; }
    public virtual Product Product { get; set; }
}