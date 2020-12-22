using System;

namespace BankAccountNS
{
    /// <summary>
    /// Bank account demo class.
    /// </summary>
    public class BankAccount
    {
        private readonly string m_customerName;
        private double accbalance;

        private BankAccount() { }

        public BankAccount(string customerName, double balance)
        {
            m_customerName = customerName;
            accbalance = balance;
        }

        public string CustomerName
        {
            get { return m_customerName; }
        }

        public double Balance
        {
            get { return accbalance; }
        }

        public void Debit(double amount)
        {
            if (amount > accbalance)
            {
                throw new ArgumentOutOfRangeException("amount");
            }

            if (amount < 0)
            {
                throw new ArgumentOutOfRangeException("amount");
            }

            accbalance -= amount;
        }

        

        public static void Main()
        {
            BankAccount ba = new BankAccount("Mr. John Doe", 2000);

            
            ba.Debit(100);
            Console.WriteLine("Current balance is ${0}", ba.Balance);
        }
    }
}
