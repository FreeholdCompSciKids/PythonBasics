
PHP="php"


DOC_FILES=\
comments.md \
data_types.md \
intro.md \
io.md \
variables.md \

ROOT_DOC= root.md.php

TARGET=../README.md

all:
	rm -f $(TARGET)
	$(MAKE) $(TARGET)


$(TARGET): $(DOC_FILES)
	$(PHP) -f $(ROOT_DOC) > $@
	echo "\n\n ---- DONE ---- \n\n"

