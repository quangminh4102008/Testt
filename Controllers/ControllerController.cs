using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using WebApplication5.data;
using WebApplication5.Models;
namespace WebApplication5.Controllers;

public class ControllerController: Controller
{
    private MydbContext _mydbContext;
    public ControllerController(MydbContext mydbContext)
    {
        _mydbContext = mydbContext;
    }

    public IActionResult GenerateSeed()
    {
        var user = _mydbContext.Users.FirstOrDefault(u => u.Id == 10);
        Order order1 = new Order()
        {
            Id = 1,
            OrderDate = new DateTime((01 / 12)),
            User = user
        };
        Order order2 = new Order()
        {
            Id = 2,
            OrderDate = new DateTime(12 / 01),
            User = user
        };
        Order order3 = new Order()
        {
            Id = 3,
            OrderDate = new DateTime(01 / 03),
            User = user
        };
        Order order4 = new Order()
        {
            Id = 4,
            OrderDate = new DateTime(12 / 08),
            User = user
        };
        Order order5 = new Order()
        {
            Id = 5,
            OrderDate = new DateTime(12 / 05),
            User = user
        };
        Order order6 = new Order()
        {
            Id = 6,
            OrderDate = new DateTime(12 / 07),
            User = user
        };
        Order order7 = new Order()
        {
            Id = 7,
            OrderDate = new DateTime(12 / 04),
            User = user
        };
        Order order8 = new Order()
        {
            Id = 8,
            OrderDate = new DateTime(12 / 03),
            User = user
        };
        Order order9 = new Order()
        {
            Id = 9,
            OrderDate = new DateTime(12 / 02),
            User = user
        };
        Order order10 = new Order()
        {
            Id = 10,
            OrderDate = new DateTime(2 / 01),
            User = user
        };
        _mydbContext.Orders.Add(order1);
        _mydbContext.SaveChangesAsync();
        return Ok();
    }

    public IActionResult GenerateSeedOrderDetail()
    {
        var order = _mydbContext.Orders.FirstOrDefault(o => o.Id == 1);
        OrderDetail orderDetail = new OrderDetail()
        {
            Quantity = 10,
            UnitPrice = 20000,
            Order = order
        };
        OrderDetail orderDetail1 = new OrderDetail()
        {
            Quantity = 12,
            UnitPrice = 30000,
            Order = order
        };
        _mydbContext.OrderDetails.Add(orderDetail);
        _mydbContext.SaveChangesAsync();
        return Ok();
    }

    public IActionResult LazyLoad(long id)
    {
        var order = _mydbContext.Orders
            .Include(order => order.User).FirstOrDefault(order => order.Id == id);
        return Json(order);
    }
}