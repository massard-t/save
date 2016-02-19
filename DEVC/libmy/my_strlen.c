void	my_putchar(char c);

int	my_strlen(char *str)
{
  int	i;
  i = 0;
  while (*str != '\0')
    {
      ++str;
      ++i;
    }
  return (i);
}
