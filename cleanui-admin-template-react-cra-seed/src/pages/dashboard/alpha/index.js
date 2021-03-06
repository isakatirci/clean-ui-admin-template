import React from 'react'
import { Helmet } from 'react-helmet'
import Authorize from 'components/LayoutComponents/Authorize'

class DashboardAlpha extends React.Component {
  render() {
    return (
      <Authorize roles={['admin','technican','Manager','Office']} redirect to="/dashboard/beta">
        <Helmet title="Home Page" />
        <div className="utils__title utils__title--flat mb-3">
          <strong className="text-uppercase font-size-16">Home Page</strong>
        </div>
        <div className="row">
          <div className="col-lg-12">
            <div className="card">
              <div className="card-body">
                [src\pages\dashboard\alpha\index.js]
              </div>
            </div>
          </div>
        </div>
      </Authorize>
    )
  }
}

export default DashboardAlpha
