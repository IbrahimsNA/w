using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace TrainingTask2.Controllers
{
    public class FormsController : Controller
    {
        // GET: Forms
        public ActionResult Inputs()
        {
            return View();
        }

        public ActionResult Lists()
        {
            return View();
        }
    }
}