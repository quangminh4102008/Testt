namespace WebApplication5.Models;

public class Order
{
    public long Id { get; set; }
    public DateTime OrderDate { get; set; }
    public long UserId { get; set; }
    public User User { get; set; }
    public virtual List<OrderDetail>OrderDetails { get; set; }
}