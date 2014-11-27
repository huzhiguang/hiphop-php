/*
   +----------------------------------------------------------------------+
   | HipHop for PHP                                                       |
   +----------------------------------------------------------------------+
   | Copyright (c) 2010-2013 Facebook, Inc. (http://www.facebook.com)     |
   +----------------------------------------------------------------------+
   | This source file is subject to version 3.01 of the PHP license,      |
   | that is bundled with this package in the file LICENSE, and is        |
   | available through the world-wide-web at the following url:           |
   | http://www.php.net/license/3_01.txt                                  |
   | If you did not receive a copy of the PHP license and are unable to   |
   | obtain it through the world-wide-web, please send a note to          |
   | license@php.net so we can mail you a copy immediately.               |
   +----------------------------------------------------------------------+
*/
#ifndef incl_HPHP_TEST_CONTEXT_H_
#define incl_HPHP_TEST_CONTEXT_H_

#include "hphp/runtime/base/types.h"
#include "hphp/runtime/vm/jit/translator.h"

namespace HPHP { namespace jit {

//////////////////////////////////////////////////////////////////////

// A TransContext for use in tests.
const auto test_context = TransContext { kInvalidTransID, 0, 0, false, 0 };

//////////////////////////////////////////////////////////////////////

}}

#endif
