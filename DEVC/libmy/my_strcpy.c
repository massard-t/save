char	*my_strcpy(char *dest, char *src)
{
  int	e;

  e = 0;
  while (src[e] != '\0')
    {
      dest[e] = src[e];
      ++e;
    }
  return (dest);
}
