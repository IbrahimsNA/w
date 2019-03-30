using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Optimization;

namespace TrainingTask2.App_Start
{
    public class BundleConfig
    {
        public static void RegisterBundles(BundleCollection bundles)
        {
            /* Jquery And Bootsrap Bundle */
            bundles.Add(new ScriptBundle("~/bundles/jquery").Include(
                "~/Scripts/jquery-3.3.1.js"
            ));

                   bundles.Add(new ScriptBundle("~/bundles/bootstrap").Include(
                            "~/Scripts/bootstrap.js"


            ));
            /* End Jquery And Bootsrap Bundle */
            /* Libraries Bundle */
        /*start main-js*/
            bundles.Add(new ScriptBundle("~/bundles/main-js").Include(
                "~/ckeditor/ckeditor.js",
                "~/DataTables/datatables.min.js",
                "~/DataTables/js/dataTables.checkboxes.js",
                "~/Scripts/chart.js",
                "~/Scripts/chartjs-plugin-labels.js",
                "~/Scripts/alertify.js",
                "~/Scripts/toastr.min.js",
                "~/Scripts/nice-scroll/jquery.nicescroll.min.js",
                 "~/Scripts/main.js",
                "~/Scripts/dashboard.js"
            ));
            

            /* Pages*/
            bundles.Add(new ScriptBundle("~/bundles/login").Include(
                "~/Scripts/Login/Login.js"
            ));

            bundles.Add(new ScriptBundle("~/bundles/Register").Include(
               "~/Scripts/Register/Register.js"
            ));

            bundles.Add(new ScriptBundle("~/bundles/Sent").Include(
               "~/Scripts/Sent/Sent.js"
            ));

            bundles.Add(new ScriptBundle("~/bundles/OrgM").Include(
               "~/Scripts/OrganizationManagment/OrganizationManagment.js"
            ));

            bundles.Add(new ScriptBundle("~/bundles/UsersM").Include(
               "~/Scripts/UsersManagment/UsersManagment.js"
            ));

            bundles.Add(new ScriptBundle("~/bundles/Inbox").Include(
               "~/Scripts/Inbox/Inbox.js"
            ));

            bundles.Add(new ScriptBundle("~/bundles/Draft").Include(
               "~/Scripts/Draft/Draft.js"
            ));

            bundles.Add(new ScriptBundle("~/bundles/Home").Include(
              "~/Scripts/DashBoard/Home.js"
            ));

            bundles.Add(new ScriptBundle("~/bundles/trash").Include(
              "~/Scripts/trash/trash.js"
            ));
            
            /* End Pages */

            bundles.Add(new ScriptBundle("~/bundles/NewMsg").Include(
              "~/Scripts/NewMsg/NewMSg.js"
                 ));
            bundles.Add(new ScriptBundle("~/bundles/Portal-js").Include(
                "~/Scripts/wow.js",
                "~/Scripts/nice-scroll/jquery.nicescroll.min.js",
                "~/Scripts/alertify.js",
                "~/Scripts/main.js",
                "~/scripts/portal/portal.js"

        
               ));
            /* end bundle Js */
            /*start css bundle */

            /* bootsrap*/
            bundles.Add(new StyleBundle("~/Content/bootstrap").Include(
                  "~/Content/bootstrap.css",
                   "~/Content/all.css"));

            /*Portal*/
            /*Portal main */
            bundles.Add(new StyleBundle("~/Content/Portal-css").Include(

                     "~/Content/alertify.css",
                      "~/Content/themes/default.css",
                            "~/Content/css-loader.css"
                      , "~/Content/main.css"
           ));



            /* end Portal main*/
            /*start main-css*/ 
            bundles.Add(new StyleBundle("~/Content/main-css").Include(

          
                        "~/Content/newlib/css/materialdesignicons.css",
                       "~/DataTables/datatables.min.css",
                     "~/DataTables/css/dataTables.checkboxes.css",
                     "~/Content/alertify.css",
                      "~/Content/themes/default.css",
                            "~/Content/css-loader.css",
                      "~/Content/dashboard.css"
                      , "~/Content/main.css"
                     ));
        }
    }
}