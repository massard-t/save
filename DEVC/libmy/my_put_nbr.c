/*
** my_put_nbr.c for  in /home/delor_r/Jour05
** 
** Made by DELOR Raiane
** Login   <delor_r@etna-alternance.net>
** 
** Started on  Fri Oct  2 14:17:17 2015 DELOR Raiane
** Last update Thu Oct  8 10:04:50 2015 DELOR Raiane
*/
void	my_putchar(char c);

void	my_putstr(char *str);

void	my_put_nbr(int n)
{
  int	i;
  int	k;

  i = 1;
  if (n < 0)
    {
      my_putchar('-');
      n = -n;
      if (n == -2147483648)
	{
	  my_putstr("2147483648");
	  return;
	}
    }
  while ((n / i) >= 10)
    i = i * 10;
  while (i > 0)
    {
      k = (n / i) % 10;
      i = i / 10;
      my_putchar(k + 48);
    }
}
