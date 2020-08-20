#!/usr/bin/env python

import os

# header
print "Content-type: text/plain\n"

# content
print '\n'.join(['%s: %s' % (key, value) for key, value in sorted(os.environ.items())])

