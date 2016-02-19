char	*my_strstr(char *str, char *to_find)
{
  int	i;
  i = 0;
  while (*str != '\0')
    {
      while (to_find[i] != '\0')
	{
	  if (str[i] != to_find[i])
	    {
	      return (my_strstr(str + 1, to_find));
	    }
	  i++;
	}
      return (str);
    }
  return ("null");
}
