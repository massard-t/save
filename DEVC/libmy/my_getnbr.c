int	my_getnbr(char *str)
{
  int	e;
  int	p;
  int	n;

  e = 0;
  p = 0;
  n = 1;
  while (str[e] == '-' || str[e] == '+')
    {
      if (str[e] == '-')
	{
	  n = -n;
	}
      ++e;
    }
  while (str[e] >= '0' && str[e] <= '9')
    {
      p = p * 10;
      p = str[e] + p - '0';
      e++;
    }
  p = n * p;
  return (p);
}
