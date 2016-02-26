CC	 =	gcc
CFLAGS = 	-W -Werror -Wall -ansi
NAME    =       	libmy.a
NTEST	 =	lib_test
SRC       =	my_putchar.c    	\
                	my_isneg.c      		\
                	my_put_nbr.c    	\
                	my_getnbr.c     	\
                	my_swap.c       		\
                	my_putstr.c     		\
                	my_strlen.c     		\
                	my_strcpy.c     		\
                	my_strncpy.c    	\
                	my_strcmp.c     	\
                	my_strncmp.c   	\
                	my_strcat.c     		\
                	my_strncat.c    		\
                	my_strstr.c		\
		my_strdup.c		\
		my_str_to_wordtab.c
MAIN	=	main.c
OBJ	=	$(SRC:%.c=%.o)
AR	=	ar r
RANLIB	=	ranlib
RM	=	rm -f

test:
	$(CC) $(CFLAGS) $(SRC) $(MAIN) -o $(NTEST)

$(NAME):	$(OBJ)
		$(AR) $(NAME) $(OBJ)
		$(RANLIB) $(NAME)

all:	$(NAME)

clean:
	$(RM) $(OBJ)

fclean:	clean
	$(RM) $(NAME)

re:	fclean all

.PHONY: all clean fclean re