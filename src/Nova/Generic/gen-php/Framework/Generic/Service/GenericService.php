<?php
/**
 * Autogenerated by Thrift Compiler (0.9.2)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 * THIS IS MODIFIED FOR YOUZAN, ANY PROBLEM PLS CONTACT lanhu(zhangyuanhao@qima-inc.com)
 * qingjiao(qingjiao@qima-inc.com) & xiao'er(shiyu@qima-inc.com)
 * @generated
 */

namespace Com\Youzan\Nova\Framework\Generic\Service;

use Kdt\Iron\Nova\Foundation\TService;
use Thrift\Type\TType;


use Com\Youzan\Nova\Framework\Generic\Interfaces\GenericService as GenericServiceInterface;
use Com\Youzan\Nova\Framework\Generic\Servicespecification\GenericService as GenericServiceSpecification;

class GenericService extends TService implements GenericServiceInterface {

  protected function specificationProvider()
  {
    return new GenericServiceSpecification();
  }

  /**
   * @param \Com\Youzan\Nova\Framework\Generic\Service\GenericRequest $request
   * @return string
   */
  public function invoke(\Com\Youzan\Nova\Framework\Generic\Service\GenericRequest $request)
  {
    return $this->apiCall(__FUNCTION__, func_get_args());
  }

}
