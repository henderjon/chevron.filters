# chevron.filters

Chevron aims to be a 'simple set of useful tools'. This means that it
exists as a humble collection of code I've written and found quite useful.

Chevron.filters is a system to write, instantiate, and/or mix-in functions for
filtering either scalar values or arrays of values. The two provided are meant
to be common, but the system itself is meant to be quite extensible.

There is the issue of using two or more of these filters as traits in the same
class. The implementing class must resolve the conflicting method names. This
is inconvenient but expected with trait usage.

# usage

If there isn't an examples dir, look through the tests.

# installation

Using [composer](http://getcomposer.org/) `"require" : { "henderjon/chevron-filters": "2.*" }`

# where is version 1.*?

Packagist (an important component to the composer ecosystem) prefers dashes as separators (I was
using dots). I had to update all the package names accordingly.

# license

See LICENSE.md for the [BSD-3-Clause](http://opensource.org/licenses/BSD-3-Clause) license.

## links

  - The [Packagist archive](https://packagist.org/packages/henderjon/chevron-filters)
  - Reading on [Semantic Versioning](http://semver.org/)
  - Reading on[Composer Versioning](https://getcomposer.org/doc/01-basic-usage.md#package-versions)





