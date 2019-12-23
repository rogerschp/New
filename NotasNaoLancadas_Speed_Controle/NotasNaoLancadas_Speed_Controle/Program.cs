using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using SeleniumExtras.WaitHelpers;
using System.Data;
using System.Data.SqlClient;
using System.Windows.Forms;
using OpenQA.Selenium.Chrome;
using OpenQA.Selenium;
using OpenQA.Selenium.Support.UI;
using OpenQA.Selenium.Interactions;

namespace NotasNaoLancadas_Speed_Controle
{
    class Program
    {
        static void Main(string[] args)
        {
            var option = new ChromeOptions();
            option.AddExtension(@"C:\Users\Roger Schmidt\Downloads\extensao(1).crx");
            IWebDriver driver = new ChromeDriver(option);
            driver.Manage().Window.Maximize();
            driver.Navigate().GoToUrl("https://www.fsist.com.br/");
            var tabs = driver.WindowHandles;
            if (tabs.Count > 1)
            {
                driver.SwitchTo().Window(tabs[1]);
                driver.Close();
                driver.SwitchTo().Window(tabs[0]);
            }
            var wait = new WebDriverWait(driver, TimeSpan.FromSeconds(7200));
            wait.Until(ExpectedConditions.ElementToBeClickable(By.Id("chave")));
            driver.FindElement(By.Id("chave")).SendKeys("35190183310441007553550020000166921682089800");
            SendKeys.SendWait("{Enter}");


        }
    }
}
