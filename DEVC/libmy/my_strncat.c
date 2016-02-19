char	*my_strncat(char *str1, char *str2, int n)
{
  int	e;
  int	i;
  e = 0;
  i = 0;
  while (str1[i] != '\0')
    i++;
  while (str2[e] != '\0' && e < n)
    {
      str1[i + e] = str2[e];
      e++;
    }
  return (str1);
}
