char	*my_strcat(char *str1, char *str2)
{
  int	e;
  int	i;
  e = 0;
  i = 0;
  while (str1[i] != '\0')
    i++;
  while (str2[e] != '\0')
    {
      str1[i + e] = str2[e];
      e++;
    }
  return (str1);
}
